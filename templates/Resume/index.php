<div class="container my-5">
    <h1 class="text-center mb-4">Create Your Resume</h1>

    <?= $this->Form->create(null, ['url' => ['action' => 'generate'], 'class' => 'needs-validation', 'novalidate' => true]); ?>

    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="card-title text-primary">Personal Information</h4>

            <div class="form-group">
                <?= $this->Form->label('name', 'Name') ?>
                <?= $this->Form->text('name', ['class' => 'form-control', 'placeholder' => 'Enter your name', 'required' => true]) ?>
                <div class="invalid-feedback">Please enter your name.</div>
            </div>

            <div class="form-group">
                <?= $this->Form->label('email', 'Email address') ?>
                <?= $this->Form->email('email', ['class' => 'form-control', 'placeholder' => 'Enter your email', 'required' => true]) ?>
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>

            <div class="form-group">
                <?= $this->Form->label('phone', 'Phone Number') ?>
                <?= $this->Form->text('phone', ['class' => 'form-control', 'placeholder' => 'Enter your phone number', 'required' => true]) ?>
                <div class="invalid-feedback">Please enter your phone number.</div>
            </div>

            <h4 class="card-title text-primary mt-4">Additional Information</h4>

            <div class="form-group">
                <?= $this->Form->label('skills', 'Skills') ?>
                <?= $this->Form->textarea('skills', ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'List your skills']) ?>
            </div>

            <div class="form-group">
                <?= $this->Form->label('experience', 'Experience') ?>
                <?= $this->Form->textarea('experience', ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Describe your experience', 'required' => true]) ?>
                <div class="invalid-feedback">Please describe your experience.</div>
            </div>

            <div class="form-group">
                <?= $this->Form->label('education', 'Education') ?>
                <?= $this->Form->textarea('education', ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'List your education (e.g., degree, institution, year)']) ?>
            </div>

            <div class="form-group">
                <?= $this->Form->label('certifications', 'Certifications') ?>
                <?= $this->Form->textarea('certifications', ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'List your certifications']) ?>
            </div>

            <div class="form-group">
                <?= $this->Form->label('interests', 'Interests') ?>
                <?= $this->Form->textarea('interests', ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'List your interests']) ?>
            </div>

            <?= $this->Form->button('Generate PDF', ['class' => 'btn btn-primary btn-block']); ?>
        </div>
    </div>

    <?= $this->Form->end(); ?>
</div>


<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<style>
    /* Add custom styles here */
    body {
        background-color: #f8f9fa;
        /* Light background color */
    }

    .card {
        border-radius: 10px;
        /* Rounded corners for the card */
        background-color: #ffffff;
        /* White background for the card */
    }

    .btn-primary {
        background-color: #007bff;
        /* Bootstrap primary color */
        border-color: #007bff;
        /* Button border color */
    }

    .btn-primary:hover {
        background-color: #0056b3;
        /* Darker blue on hover */
        border-color: #0056b3;
        /* Button border color on hover */
    }
</style>