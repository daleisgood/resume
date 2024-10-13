<div class="container my-5">
    <h1 class="text-center mb-4">Resume</h1>
    <hr>

    <div class="row mb-4">
        <div class="col-md-6">
            <h3 class="text-primary">Personal Information</h3>
            <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
            <p><strong>Phone:</strong> <?= htmlspecialchars($phone) ?></p>
        </div>
    </div>

    <hr>

    <div class="row mb-4">
        <div class="col-md-12">
            <h3 class="text-primary">Objective</h3>
            <p>Seeking a position where I can utilize my skills and contribute to the success of the organization.</p>
        </div>
    </div>

    <hr>

    <div class="row mb-4">
        <div class="col-md-12">
            <h3 class="text-primary">Skills</h3>
            <ul class="list-unstyled">
                <?php if (!empty($skills)): ?>
                    <?php foreach (explode("\n", $skills) as $skill): ?>
                        <li><i class="fas fa-check-circle text-success"></i> <?= htmlspecialchars(trim($skill)) ?></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>No skills listed</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <hr>

    <div class="row mb-4">
        <div class="col-md-12">
            <h3 class="text-primary">Experience</h3>
            <p><?= nl2br(htmlspecialchars($experience)) ?></p>
        </div>
    </div>

    <hr>

    <div class="row mb-4">
        <div class="col-md-12">
            <h3 class="text-primary">Education</h3>
            <p><?= nl2br(htmlspecialchars($education)) ?></p>
        </div>
    </div>

    <hr>

    <div class="row mb-4">
        <div class="col-md-12">
            <h3 class="text-primary">Certifications</h3>
            <ul class="list-unstyled">
                <?php if (!empty($certifications)): ?>
                    <?php foreach (explode("\n", $certifications) as $certification): ?>
                        <li><i class="fas fa-check-circle text-success"></i> <?= htmlspecialchars(trim($certification)) ?></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>No certifications listed</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <hr>

    <div class="row mb-4">
        <div class="col-md-12">
            <h3 class="text-primary">Interests</h3>
            <ul class="list-unstyled">
                <?php if (!empty($interests)): ?>
                    <?php foreach (explode("\n", $interests) as $interest): ?>
                        <li><i class="fas fa-check-circle text-success"></i> <?= htmlspecialchars(trim($interest)) ?></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>No interests listed</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <hr>

    <div class="row mb-4">
        <div class="col-md-12">
            <h3 class="text-primary">References</h3>
            <p>Available upon request.</p>
        </div>
    </div>
</div>