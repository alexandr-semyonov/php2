<?php

namespace App\Controllers;

use App\Logger;
use App\Controller;
use App\Models\Article;
use App\Exceptions\NotFoundException;

/*
 * Class News
 * Класс контроллера News
 *
 * @package App\Controllers
 */
class News
    extends Controller
{
    /*
     * Метод actionDefault
     * Выводит список последних новостей
     */
    protected function actionDefault()
    {
        $this->view->news = Article::findLatest(3);
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    /*
     * Метод actionAll
     * Выводит список всех новостей
     */
    protected function actionAll()
    {
        $this->view->news = Article::findAll();
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    /*
     * Метод actionOne
     * Выводит одну конкретную новость
     */
    protected function actionOne()
    {
        $news = $this->view->article = Article::findById($_GET['id']);
        if (empty($news)) {
            $error = new NotFoundException('Новость не найдена!');
            Logger::getInstance()->log($error);
            throw $error;
        }
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}