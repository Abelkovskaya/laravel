<?php
 
namespace App\Http\Controllers;
 
class NewsController extends Controller
{
    private $news =[
                        1 => [
                            'title' => 'Новость 1',
                            'body' => 'Подробное описание новости 1'
                        ],
                        2 => [
                            'title' => 'Новость 2',
                            'body' => 'Подробное описание новости 2'
                        ]
                    ];
    
    public function index()
    {
        $response = '';
        foreach ($this->news as $id => $item){
        $response .= "<div> 
                        <a href = '/news/card/{$id}'>
                        {$item['title']}
                        </a>
                    </div>";
    }
        return $response;
    }
 
    public function card($id)
    {
        $news = $this->news[$id];
        return $news['title'];
    }
    
}