<?php

    class Menu{
        
        private $menuItems;

        // Konštruktor, ktorý umožňuje nastaviť položky menu pri vytváraní objektu
        public function __construct($menuItems = [])
        {
            if (empty($menuItems)) {
                $menuItems = [
                    ['label' => 'Domov', 'link' => 'index.php'],
                    ['label' => 'Portfólio', 'link' => 'portfolio.php'],
                    ['label' => 'Q&A', 'link' => 'qna.php'],
                    ['label' => 'Kontakt', 'link' => 'kontakt.php']
                ];
            }
            
            // Uloženie položiek menu
            $this->menuItems = $menuItems;
        
        }
        public function index()
        {
            return $this->menuItems;
        }
    }

?>