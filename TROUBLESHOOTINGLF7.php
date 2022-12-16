<?php

include_once 'import.php';

try {
  // Import CSV file
  $csv_lines = imp_open("Medikamente.csv");

  // Loop through each line of the CSV file
  foreach ($csv_lines as $line) {
    // Split line into an array of fields
    $fields = explode(';', $line);
    $num_fields = count($fields);

    // Output fields one below the other
    for ($i = 0; $i < $num_fields; $i++) {
      echo $fields[$i] . "<br>";
    }
  }
} catch (Exception $e) {
  // Output error message if an exception occurs
  echo "An error occurred: " . $e->getMessage();
}

?>
