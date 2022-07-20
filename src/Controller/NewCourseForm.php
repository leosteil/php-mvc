<?php

namespace Alura\Cursos\Controller;

class NewCourseForm implements Controller
{
    public function handleRequest(): void
    {
        $titulo = "Novo Curso";
        require __DIR__ . '/../../view/courses/formulario.php';
    }
}
