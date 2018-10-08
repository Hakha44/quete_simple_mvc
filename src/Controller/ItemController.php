<?php
namespace Controller;

use __DIR__ Model\ItemManager; . '/../Model/ItemManager.php';

require __DIR__. '/../View/item.php';

class ItemController
{

    public function index()
    {

        $itemManager = new ItemManager();
        $items = $itemManager->selectAllItems();
    }

}
?>