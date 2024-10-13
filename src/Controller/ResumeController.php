<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Cake\Mailer\Mailer;
use Cake\Controller\Controller;
use Cake\Http\Exception\BadRequestException;
use Cake\Mailer\Exception\MissingMailerException;

class ResumeController extends AppController
{
    public function index()
    {
        // Renders the form for user input
    }

    public function generate()
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            // Validate the form input
            if (empty($data['name']) || empty($data['email']) || empty($data['phone']) || empty($data['experience'])) {
                throw new BadRequestException('Please fill out all required fields.');
            }

            // Pass the form data to the view
            $this->set($data);

            // Render the resume template
            $resumeHtml = $this->render('/Resume/resume');

            // Generate the PDF using Dompdf
            $dompdf = new Dompdf();
            $dompdf->loadHtml($resumeHtml);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            // Save the PDF to a temporary file
            $output = $dompdf->output();
            $pdfFilePath = TMP . 'resume_' . time() . '.pdf';
            file_put_contents($pdfFilePath, $output);

            // Send email with the PDF as attachment
            if ($this->sendEmailWithResume($data, $pdfFilePath)) {
                $this->Flash->success('Resume generated and sent to ' . $data['email']);
            } else {
                $this->Flash->error('There was an issue sending the email.');
            }

            // Optionally delete the PDF after sending
            if (file_exists($pdfFilePath)) {
                unlink($pdfFilePath); // Delete the file
            }

            // return $this->response->withType('application/pdf');
            return $this->redirect(['action' => 'index']);
        }
    }


    public function sendEmailWithResume($data, $pdfFilePath)
    {
        try {
            $mailer = new Mailer('default');

            // Compose the email
            $mailer
                ->setFrom(['dalerufila@gmail.com' => 'Dale Test'])
                ->setTo($data['email'])
                ->setSubject('Your Resume')
                ->setEmailFormat('html')
                ->setAttachments([
                    'resume.pdf' => [
                        'file' => $pdfFilePath,
                        'mimetype' => 'application/pdf'
                    ]
                ])
                ->deliver('Please find your resume attached.');

            return true;
        } catch (MissingMailerException $e) {
            return false;
        }
    }
}
