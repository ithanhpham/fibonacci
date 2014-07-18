<?
/* author: Thanh Pham
 * date:   July 17, 2014
 * fibonacci numbers, both iterative and recursive
 */
class fibonacci {

    public function __constructor() {
    }

    //recursive method
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
    
    //iterative process
    public function iter_process($n) {

        $num1 = 0;
        $num2 = 1;
        $sum  = 1;

	//print out the first 1 followed
        print $sum . ' ';

        //iteratively get the numbers
        //start at $i=2 because first index is 1, the second 1 is calculated
        for($i=2; $i <= $n; $i++){
            $sum = $num1 + $num2;
         
            $num1 = $num2;
            $num2 = $sum;
            print $sum . ' ';
        }



    }
}

/* 
 * Main
 */

    //check if arguments are not set
    if(!isset($argv[1]) || !isset($argv[2])){
        echo 'arg: (i)terative or (r)ecursive and number of times e.g.  php fibinacci.php i 6 ' . PHP_EOL; 
    } else {
    
        $n = $argv;
        $myFibo = new fibonacci();

        //formatting
        echo PHP_EOL . "f(" . $n[2] . ")" . PHP_EOL;
    
        //recursive call
        if($n[1] == 'r') { 
            for($i=1;$i <= $n[2]; $i++) {
                echo $myFibo->process($i) . ' ';
            }
        } else {
            //else iterative call
            $myFibo->iter_process($n[2]);  
        }
    
        echo PHP_EOL;
    }
