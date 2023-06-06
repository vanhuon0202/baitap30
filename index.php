<?php
//1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function checkEvenNumber($number) 
{
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$number = 17;
if (checkEvenNumber($number)) 
{
    echo $number . ' là số chẵn.';
} else 
{
    echo $number . ' là số lẻ.';
}


//2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function calculateSum($n) 
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 12;
$tong = calculateSum($n);
echo 'Tổng của các số từ 1 đến ' . $n . ' là: ' . $sum;


//3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function printMultiplicationTable()
{
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương của số " . $i . ":<br>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo $i . " x " . $j . " = " . $result . "<br>";
        }
        echo "<br>";
    }
}
printMultiplicationTable();


//4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkString($string, $keyWord) 
{
    $check = strpos($string, $keyWord);
    if ($check !== false) {
        return true;
    } else {
        return false;
    }
}
$string = "Xin chao Dung ne";
$keyWord = "Dung";

if (checkString($string, $keyWord)) {
    echo "Chuỗi chứa từ cụ thể '$keyWord'.";
} else {
    echo "Chuỗi không chứa từ cụ thể '$keyWord'.";
}

//5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng
function findMinMax($array) 
{
    $min = $array[0];
    $max = $array[0];
 
    foreach ($array as $number) {
       if ($number < $min) {
          $min = $number;
       }
 
       if ($number > $max) {
          $max = $number;
       }
    }
 
    return ['min' => $min, 'max' => $max];
} 
$array = [7, 2, 9, 4, 1];
$result = findMinMax($array);
echo 'Giá trị nhỏ nhất trong mảng là: ' . $result['min'] . '<br>';
echo 'Giá trị lớn nhất trong mảng là: ' . $result['max'];



//6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sortArrayAscending($array) 
{
    sort($array);
    return $array;
}
$array = [1, 9, 2, 3, 7];
$sortedArray = sortArrayAscending($array);

echo "Mảng sau khi sắp xếp: ";
foreach ($sortedArray as $element) {
    echo $element . " ";
}


//7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function calculateFactorial($n) {
    if ($n <= 1) {
       return 1;
    } else {
       return $n * calculateFactorial($n - 1);
    }
}
$number = 5;
$factorial = calculateFactorial($number);
echo 'Giai thừa của ' . $number . ' là: ' . $factorial;

 


//8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function findPrimeNumbersInRange($start, $end)
{
    $primeNumbers = [];

    for ($number = $start; $number <= $end; $number++) {
        $count = 0;

        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) 
            {
                $count++;
            }
        }

        if ($count == 2) {
            $primeNumbers[] = $number;
        }
    }

    return $primeNumbers;
}
$start = 1;
$end = 15;

$primeNumbers = findPrimeNumbersInRange($start, $end);

echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
foreach ($primeNumbers as $so) 
{
    echo $so . " ";
}


//9. Viết chương trình PHP để tính tổng của các số trong một mảng.
function totalSum($array) {
    $sum = 0;
 
    foreach ($array as $number) {
       $sum += $number;
    }
 
    return $sum;
}
$array = [1, 2, 3, 4, 5];
$sum = totalSum($array);
echo 'Tổng của các số trong mảng là: ' . $sum;
  


//10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function printFibonacciInRange($start, $end) 
{
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i <= $end; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    $fibonacciInRange = [];
    for ($j = $start; $j <= $end; $j++) {
        $fibonacciTrongKhoang[] = $fibonacci[$j];
    }

    return $fibonacciInRange;
}
$start = 0;
$end = 20;

$fibonacciInRange = printFibonacciInRange($start, $end);

echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
foreach ($fibonacciInRange as $so) {
    echo $so . " ";
}

//11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function isArmstrongNumber($number) 
{
    $sum = 0;
    $temp = $number;
    $numDigits = strlen((string)$number);
    
    while ($temp != 0) {
       $digit = $temp % 10;
       $sum += pow($digit, $numDigits);
       $temp = (int)($temp / 10);
    }
    
    if ($sum == $number) {
       return true;
    } else {
       return false;
    }
}
$number = 153;

if (isArmstrongNumber($number)) 
{
   echo "$number là một số Armstrong";
} else {
   echo "$number không phải là số Armstrong";
}



//12. Viết chương trình PHP để chèn một phần tử vào một mảng ở bất kỳ vị trí nào.
function insertElementToArray($array, $element, $position) 
{
    if ($position < 0 || $position > count($array)) {
       // Nếu vị trí chèn không hợp lệ, trả về mảng ban đầu
       return $array;
    }
    
    // Tách mảng thành hai phần: phần trước vị trí chèn và phần sau vị trí chèn
    $arrayBefore = array_slice($array, 0, $position);
    $arrayAfter = array_slice($array, $position);
    
    // Chèn phần tử vào mảng
    $arrayBefore[] = $element;
    
    // Kết hợp lại mảng
    $resultArray = array_merge($arrayBefore, $arrayAfter);
    
    return $resultArray;
}
$array = [1, 2, 3, 4, 5];
$element = 10;
$position = 2;

$resultArray = insertElementToArray($array, $element, $position);
print_r($resultArray);


//13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($array) 
{
    $result = array();
 
    foreach ($array as $element) {
       if (!in_array($element, $result)) {
          $result[] = $element;
       }
    }
 
    return $result;
}
$array = [1, 2, 3, 4, 2, 3, 5, 1];
$resultArray = removeDuplicates($array);
print_r($resultArray);


//14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findElementPosition($array, $element) 
{
    $positions = array();
 
    foreach ($array as $index => $value) {
       if ($value === $element) {
          $positions[] = $index;
       }
    }
 
    return $positions;
}
$array = [1, 2, 3, 4, 2, 3, 5, 1];
$element = 2;
$positions = findElementPosition($array, $element);

if (!empty($positions)) {
   echo "Vị trí của phần tử $element trong mảng là: ";
   foreach ($positions as $position) {
      echo $position . " ";
   }
} else {
   echo "Phần tử $element không tồn tại trong mảng.";
}

//15. Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string) 
{
    $reversedString = '';
 
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
       $reversedString .= $string[$i];
    }
 
    return $reversedString;
}
$string = "Hello, World!";
$reversedString = reverseString($string);
echo $reversedString;


//16. Viết chương trình PHP để tính toán số lượng phần tử trong một mảng.
function countElements($array) 
{
    return count($array);
}
$array = [1, 2, 3, 4, 5];
$count = countElements($array);
echo $count;


//17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($string) 
{
    $string = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $string));
    $reverseString = strrev($string);
 
    if ($string === $reverseString) {
       return true;
    } else {
       return false;
    }
}
$string = "Madam";
$isPalindrome = isPalindrome($string);

if ($isPalindrome) {
   echo "$string là chuỗi Palindrome.";
} else {
   echo "$string không là chuỗi Palindrome.";
}


//18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $element) 
{
    $count = 0;
 
    foreach ($array as $value) {
       if ($value === $element) {
          $count++;
       }
    }
 
    return $count;
}
$array = [1, 2, 3, 2, 4, 2, 5];
$element = 2;
$count = countOccurrences($array, $element);
echo $count;


//19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortDescending($array) 
{
    rsort($array);
    return $array;
}
$array = [5, 2, 8, 1, 9];
$sortedArray = sortDescending($array);
print_r($sortedArray);


//20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addToArray($array, $element, $position) 
{
    if ($position === 'start') {
       array_unshift($array, $element);
    } elseif ($position === 'end') {
       array_push($array, $element);
    }
 
    return $array;
}
$array = [1, 2, 3, 4];
$element = 5;
$position = 'start';
$newArray = addToArray($array, $element, $position);
print_r($newArray);



//21. Viết chương trình PHP để tìm hai số lớn trong một mảng.
function findLargestNumbers($array) 
{
    $largestNumbers = [];
 
    // Sắp xếp mảng theo thứ tự giảm dần
    rsort($array);
 
    // Lấy hai phần tử đầu tiên trong mảng đã sắp xếp
    $largestNumbers[] = $array[0];
    $largestNumbers[] = $array[1];
 
    return $largestNumbers;
}
$array = [5, 2, 8, 1, 9];
$largestNumbers = findLargestNumbers($array);
print_r($largestNumbers);


//22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findGCDandLCM($a, $b) 
{
    $gcd = findGCD($a, $b);
    $lcm = ($a * $b) / $gcd;
 
    return array('gcd' => $gcd, 'lcm' => $lcm);
}
 
 function findGCD($a, $b) 
{
    while ($b != 0) {
       $temp = $a % $b;
       $a = $b;
       $b = $temp;
    }
    return $a;
}
$a = 12;
$b = 18;
$result = findGCDandLCM($a, $b);
echo 'GCD: ' . $result['gcd'] . '<br>';
echo 'LCM: ' . $result['lcm'];


//23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function isPerfectNumber($number) 
{
    $sum = 0;
 
    // Tìm các ước số của số $number
    for ($i = 1; $i < $number; $i++) {
       if ($number % $i == 0) {
          $sum += $i;
       }
    }
 
    // Kiểm tra nếu tổng các ước số bằng $number
    if ($sum == $number) {
       return true;
    } else {
       return false;
    }
}
$number = 28;
if (isPerfectNumber($number)) {
   echo $number . ' là số hoàn hảo';
} else {
   echo $number . ' không là số hoàn hảo';
}


//24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOddNumber($array) 
{
    $largestOdd = null;
 
    foreach ($array as $number) {
       if ($number % 2 != 0) {
          if ($largestOdd === null || $number > $largestOdd) 
          {
             $largestOdd = $number;
          }
       }
    }
 
    return $largestOdd;
}
$array = [2, 5, 8, 11, 7, 4];
$largestOdd = findLargestOddNumber($array);
echo 'Số lẻ lớn nhất trong mảng là: ' . $largestOdd;



//25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrimeNumber($number) 
{
    if ($number <= 1) {
       return false;
    }
 
    for ($i = 2; $i <= sqrt($number); $i++) {
       if ($number % $i == 0) {
          return false;
       }
    }
 
    return true;
}
$number = 17;
if (isPrimeNumber($number)) {
   echo $number . ' là số nguyên tố';
} else {
   echo $number . ' không là số nguyên tố';
}


//26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositiveNumber($array) 
{
    $largestPositive = null;
 
    foreach ($array as $number) {
       if ($number > 0) {
          if ($largestPositive === null || $number > $largestPositive) {
             $largestPositive = $number;
          }
       }
    }
 
    return $largestPositive;
}
$array = [-2, 5, -8, 11, 7, 4];
$largestPositive = findLargestPositiveNumber($array);
echo 'Số dương lớn nhất trong mảng là: ' . $largestPositive;


//27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegativeNumber($array) 
{
    $largestNegative = null;
 
    foreach ($array as $number) {
       if ($number < 0) {
          if ($largestNegative === null || $number > $largestNegative) {
             $largestNegative = $number;
          }
       }
    }
 
    return $largestNegative;
}
$array = [2, -5, -8, -11, -7, 4];
$largestNegative = findLargestNegativeNumber($array);
echo 'Số âm lớn nhất trong mảng là: ' . $largestNegative;



//28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOfOddNumbers($n) 
{
    $sum = 0;
 
    for ($i = 1; $i <= $n; $i += 2) {
       $sum += $i;
    }
 
    return $sum;
}
$n = 10;
$sum = sumOfOddNumbers($n);
echo 'Tổng các số lẻ từ 1 đến ' . $n . ' là: ' . $sum;


//29. Viết chương trình PHP để tìm phương pháp chính trong một khoảng cho trước.
function findMainMethod($start, $end) 
{
    $mainMethod = '';
 
    for ($i = $start; $i <= $end; $i++) {
       if ($i % 2 == 0) {
          $mainMethod .= 'Even ';
       } else {
          $mainMethod .= 'Odd ';
       }
    }
 
    return trim($mainMethod);
}
$start = 1;
$end = 10;
$mainMethod = findMainMethod($start, $end);
echo 'Phương pháp chính trong khoảng từ ' . $start . ' đến ' . $end . ' là: ' . $mainMethod;


//30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($string, $substring) 
{
    $stringLength = strlen($string);
    $substringLength = strlen($substring);
 
    if ($substringLength > $stringLength) {
       return false;
    }
 
    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
       $window = substr($string, $i, $substringLength);
 
       if ($window === $substring) {
          return true;
       }
    }
 
    return false;
}
$string = "Hello, world!";
$substring = "world";
$isSubstring = isSubstring($string, $substring);

if ($isSubstring) {
   echo 'Chuỗi "' . $substring . '" là chuỗi con của chuỗi "' . $string . '".';
} else {
   echo 'Chuỗi "' . $substring . '" không là chuỗi con của chuỗi "' . $string . '".';
}
?>