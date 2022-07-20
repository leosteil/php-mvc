<?php include __DIR__ . '/../start.php'; ?>

    <a href="novo-curso" class="btn btn btn-primary mb-2">
        Novo curso
    </a>

    <ul class="list-group">
        <?php foreach ($courses as $course): ?>
            <li class="list-group-item">
                <?= $course->getDescription(); ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?php include __DIR__ . '/../end.php'; ?>
