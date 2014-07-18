<?

class fibonaci {

    public function __constructor() {
    }

    public function process($n = 2) {
        switch($n){
         
        case(0):
            return 0;
            break;
        case(1):
            return 1;
            break;
        default:
            return $this->process($n - 2) + $this->process($n - 1);
        }
    }

    public function iter_process($n) {

        $x = 0;
        $num1 = 0;
        $num2 = 1;
        $sum  = 1;
        print $sum . ' ';

        for($i=0; $i < $n; $i++){
            $sum = $num1 + $num2;
         
            $num1 = $num2;
            $num2 = $sum;
            print $sum . ' ';
        }



    }
}

if(!isset($argv[1]) || !isset($argv[2])){
    echo 'arg: (i)terative or (r)ecursive and number of times e.g.  php fibinacci.php i 6 ' . PHP_EOL; 
} else {
    $n = (int)$argv[2];
    $myFibo = new fibonaci();

    echo "f(" . $n . ")" . PHP_EOL;

    if($n[1] == 'r') {
        $c = 1;
        for($i=0;$i <= $n; $i++) {
            echo $myFibo->process($c) . ' ';
            $c++;
        }
    } else {
        $myFibo->iter_process($n);  
    }

    echo PHP_EOL;
}
