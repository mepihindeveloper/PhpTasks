<?php
/**
 * Вашим заданием будет создание сокращенного варианта ФИО. 
 * Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.
*/

$names = [
  'Иванов Иван Петрович',
  'Иванов Иван',
  'Иванов'
];

foreach($names as &$name) {
  // Преобразуем каждое сочетания ФИО в массив, разделив по пробелу
  $namesArr = explode(' ', $name);
  // Для дальнейшего удобства записываем количество составных частей ФИО
  $countOfNamesArr = count($namesArr);

  // Только в случае, если указана не только фамилия, то прводим сокращение
  if ($countOfNamesArr > 1) {
    for ($i = 1; $i < $countOfNamesArr; $i++) {
      // Берем первую букву (0, 1)
      $namesArr[$i] = mb_substr($namesArr[$i], 0, 1).".";
    }

    $name = implode(' ', $namesArr);
  }
}

print_r($names);
