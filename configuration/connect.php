
<?php 

 define('HOST', 'localhost');
 define('DATABASENAME', 'crud-mvc-poo-php-gn');
 define('USER', 'root');
 define('PASSWORD', '');

 
 class Connect{
    protected $connection;

    function  __construct(){
        $this->connectDatabase();
    }
    /**
     * Summary of connectDatabase
     * @return void
     */
    function connectDatabase()
    {
        try{
            $this->connection = new PDO('mysql:host='.HOST.';port=PORTA;dbname='.DATABASENAME, USER, PASSWORD);
        }catch(PDOException $e){

            echo "Error!".$e->getMessage();
            (die);        }
    }
    
 }
 $testConnection = new Connect();

?>