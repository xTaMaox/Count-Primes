class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function countPrimes($n) {
     $primes=[];
     for($i=0;$i<$n;$i++){
         $primes[]=false;
     }

 for($i=2;$i*$i<count($primes);$i++){
  if(!$primes[$i]){
      for($j=$i;$j*$i<count($primes);$j++){
          $primes[$i*$j]=true;
      }
  }

 }
     $primeCount=0;
    for($i=2;$i<count($primes);$i++){
        if(!$primes[$i]) $primeCount++;
    }
     return $primeCount;
    }
        
 
    }