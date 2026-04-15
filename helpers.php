<?php
  function basepath(string $path = '') {
    return __DIR__ . '/' . $path;
  }

  /**
   * loadview function to load views
   * @param mixed $name
   * @return void
   */
  function loadview($name) {
    require basepath('views/' . $name . '.view.php');
  }
  /**
   * loadpartial function to load partials
   * @param mixed $name
   * @return void
   */
  function loadpartial($name) {
    $partialPath = basepath('views/partials/' . $name . '.php');
    if (file_exists($partialPath)) {
      require $partialPath;
    } else {
      echo "Partial not found: " . $name;
    }
  }

