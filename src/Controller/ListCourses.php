<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Course;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListCourses implements Controller
{
    private $repository;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repository = $entityManager->getRepository(Course::class);
    }

    public function handleRequest(): void
    {
        $cursos = $this->repository->findAll();
        $titulo = "Lista de Cursos";
        require __DIR__ . '/../../view/courses/listar-cursos.php';
    }
}
