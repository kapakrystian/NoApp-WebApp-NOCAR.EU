<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\RegisterModel;
use App\View;
use App\Request;
use App\Constants\Permissions;
use App\Models\TasksModel;
use App\Models\HoursModel;
use App\Models\LeavetimeModel;
use App\Models\MyProfileModel;

//kontroler abstrakcyjny
abstract class Controller implements ControllerInterface
{

    //widoki
    protected View $view;
    protected Request $request;

    //konfiguracja
    private static array $configuration = [];

    //modele
    protected LoginModel $loginModel;
    protected RegisterModel $registerModel;
    protected TasksModel $tasksModel;
    protected HoursModel $hoursModel;
    protected MyProfileModel $myProfileModel;
    protected LeavetimeModel $leavetimeModel;

    //konstruktor tworzący obiekty poszczególnych modeli i widoków
    public function __construct()
    {
        $this->loginModel = new LoginModel(self::$configuration);
        $this->registerModel = new RegisterModel(self::$configuration);
        $this->tasksModel = new TasksModel(self::$configuration);
        $this->hoursModel = new HoursModel(self::$configuration);
        $this->myProfileModel = new MyProfileModel(self::$configuration);
        $this->leavetimeModel = new LeavetimeModel(self::$configuration);

        $this->view = new View();
        $this->request = new Request();
    }

    //metoda statyczna przypisująca tablicę przekazaną w parametrze do metody statycznej wewnątrz 
    public static function initConfiguration(array $configuration)
    {
        self::$configuration = $configuration;
    }
}
