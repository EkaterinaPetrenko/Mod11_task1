<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Таблица истинности PHP</title>
  </head>

  <body>
    <main>
      <br>
      <br>
      <br>
      <table>
      <caption class = "tableCaption">Таблица истинности PHP</caption>
        <tr class = tableHead>
          <th>A</th>
          <th>B</th>
          <th>!A</th>
          <th>A || B</th>
          <th>A && B</th>
          <th>A xor B</th>
        </tr>
        <?php 
          for ($i = 0; $i < 4; $i++) {
            $valA = floor($i / 2);
            $valB = $i % 2;
            $nums = array();
            $nums[0] = $valA;
            $nums[1] = $valB;
            // Вычисляем значения ячеек таблицы
            $nums[2] = (int)!$valA;
            $nums[3] = (int)($valA || $valB);
            $nums[4] = (int)($valA && $valB);
            $nums[5] = (int)($valA ^ $valB);
            // Выводим очередную строку таблицы
            echo "<tr><td class = \"tableHead\">$nums[0]</td>";
            echo "<td class = \"tableHead\">$nums[1]</td>";
            for ($j = 2; $j < 6; $j++) {
              echo "<td>$nums[$j]</td>";
            }
            echo "</tr>";
          }
        ?>
      </table>
      <footer>
        <br>
        <br>
        <br>
        <div class="copyright">Copyright @ PetrenkoE</div>   
      </footer>
    </main>
  </body>
</html>
