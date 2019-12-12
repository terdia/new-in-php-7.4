<?php declare(strict_types=1);

ini_set('display_errors', '1');
error_reporting(E_ALL);

#Typed properties

class Student {

}

class Person {

    public string $fullName;
    public int $age;
    public bool $isAlive;
    public Student $student;

    public function __construct($fullName, $age, $isAlive, $student)
    {
        $this->fullName = $fullName;
        $this->age = $age;
        $this->isAlive = $isAlive;
        $this->student = $student;
    }

    public function __toString()
    {
        return sprintf('%s is %s age old and alive? %s', $this->fullName, $this->age, $this->isAlive);
    }
}

echo new Person('Terry Osayawe', 18, true, new Student);

#Arrow functions
$array = [1, 2, 4, 6, 10, 8, 9, 14];
$checker = 2;

$evenNumbers = array_filter($array, function ($value) use($checker) {
    return $value % $checker === 0;
});
var_dump($evenNumbers);


$evenNumberArrowFunction = array_filter($array, fn($value) => $value % $checker === 0);
var_dump($evenNumberArrowFunction);

class EvenNumber {

    private array $array = [1, 2, 4, 8, 9, 14];
    private int $checker = 2;

    public function __construct()
    {
        var_dump(array_filter($this->array, fn($value) => $value % $this->checker === 0));
    }
}

new EvenNumber();

#Null coalescing assignment operator
$bar = ['name' => 'Terry O'];
$foo = $bar['name'] ?? 'not exists';
echo $foo;

var_dump($bar[0] ??= 'assignment');

#Array spread operator
$one = ['unitTest', 'TDD'];
$two = [56, 90, 35];
$newArray = array_merge($one, $two);
var_dump($newArray);

$spreadArray = ['PHP 7.4', ...$one, ...$two];
var_dump($spreadArray);