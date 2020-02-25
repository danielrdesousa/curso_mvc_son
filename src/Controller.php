<?php

namespace SON;

class Controller
{
    protected $model;

    public function __construct(Model $model) {
        $this->model = $model;
        $this->configmodel();
    }

    public function render(array $props = [], string $view = null)
    {
        if(!$view) $view = $this->controllerName().'/'.debug_backtrace()[1]['function'];
        
        extract($props);
        require __DIR__.'/../views/'. $view .'.tpl.php';
    }

    private function controllerName()
    {
        $class = get_class($this); 
        $class = explode('\\', $class);
        $class = array_pop($class); 
        $class = preg_replace('/Controller$/', '', $class);

        return strtolower($class);
    }
    private function configModel()
    {
        if (!$this->model->getTableName()) {
            $this->model->setTableName($this->controllerName());
        }
    }
}