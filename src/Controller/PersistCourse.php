<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Course;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManagerInterface;

class PersistCourse implements Controller
{
    private EntityManagerInterface $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function handleRequest(): void
    {
        $description = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

        $course = new Course();
        $course->setDescription($description);
        $this->entityManager->persist($course);
        $this->entityManager->flush();

        header('Location: /listar-cursos', true, 302);
    }
}