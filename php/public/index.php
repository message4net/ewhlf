<?php //session_start();
//
echo 'a';
//require '../router.php';
// echo 'a<br/>';
// echo dirname('../../').'<br/>';
// echo '2<br/>';
//phpinfo();

//$dbConf= array(
//    'host'=>'127.0.0.1',
//    'user'=>'devuser',
//    'password'=>'r3Suve@',
//    'dbName'=>'tst',
//    'charSet'=>'utf8mb4',
//    'port'=>'3306'
//    );
//$pdo=myPDO::getInstance($dbConf);
//    /*************数据查询***************************/
//    $sql='SELECT * from `t` as t';
//    $rs=$pdo->query($sql);
//    $data=$rs->fetchAll();//取出所有结果
//    print_r($data);
//    /*************数据更新***************************/
//    //$sql='UPDATE t1 SET t1.`id1`=11 WHERE t1.`id1`=1';
//    //$rs=$pdo->query($sql);
//    
//    /**
//     * 数据库pdo连接
//     */
//    class myPDO{
//        private static $pdo;
//        
//        private function __construct(){
//            //code
//        }
//        private function __clone(){
//            //code
//        }
//        /**
//         * 获取实例化的PDO，单例模式
//         * @return PDO
//         */
//        public static function getInstance($dbConf){
//            if(!(self::$pdo instanceof PDO)){
//                $dsn ="mysql:host=".$dbConf['host'].";port=".$dbConf['port'].";dbname=".$dbConf['dbName'].";charset=".$dbConf['charSet'];
//                try {
//                    self::$pdo = new PDO($dsn,$dbConf['user'], $dbConf['password'], array(PDO::ATTR_PERSISTENT => true,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4")); //保持长连接
//                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
//                } catch (PDOException $e) {
//                    print "Error:".$e->getMessage()."<br/>";
//                    die();
//                }
//            }
//            return self::$pdo;
//        }
//    }  




