<?php
class resMenu {

  private $menuList;

  function __construct(array $menuList) {
    if(sizeof($menuList) > 0) {
      $this->menuList = $menuList;
    } else {
      new Exception("Data Unavailable");
    }
  }

  public function menuList() {
    $itemslist= [];

    foreach($this->menuList as $items) {
      $itemslist[] = array(
        "id" => $items['id'],
        "name" => $items['name']
      );
    }

    return json_encode($itemslist);
  }

  public function menuData($id) {
    $result = ["Invalid Menu Id"];

    if($id) {
      foreach($this->menuList as $items) {
        if ($id == $items['id']) {
          $result= $items;
          break;
        }
      }
    }

    return json_encode($result);
  }
}
?>
