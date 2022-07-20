<?php

use Alura\Cursos\Controller\NewCourseForm;
use Alura\Cursos\Controller\ListCourses;
use Alura\Cursos\Controller\PersistCourse;

return [
    '/listar-cursos' => ListCourses::class,
    '/novo-curso' => NewCourseForm::class,
    '/salvar-curso' => PersistCourse::class
];
