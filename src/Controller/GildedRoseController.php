<?php

namespace Runroom\GildedRose\Controller;

use Runroom\GildedRose\Model\Item;

class GildedRoseController {

    /**
     * @param array<int, Item> $items
     */
    function updateQuality(array $items) : void {
        foreach ($items as $item) {
            if ($item->getName() != 'Aged Brie' and $item->getName() != 'Backstage passes to a TAFKAL80ETC concert') {
                if ($item->getQuality() > 0) {
                    if ($item->getName() != 'Sulfuras, Hand of Ragnaros') {
                        $item->setQuality($item->getQuality() - 1);
                    }
                }
            } else {
                if ($item->getQuality() < 50) {
                    $item->setQuality($item->getQuality() + 1);
                    if ($item->getName() == 'Backstage passes to a TAFKAL80ETC concert') {
                        if ($item->getSellIn() < 11) {
                            if ($item->getQuality() < 50) {
                                $item->setQuality($item->getQuality() + 1);
                            }
                        }
                        if ($item->getSellIn() < 6) {
                            if ($item->getQuality() < 50) {
                                $item->setQuality($item->getQuality() + 1);
                            }
                        }
                    }
                }
            }

            if ($item->getName() != 'Sulfuras, Hand of Ragnaros') {
                $item->setSellIn($item->getSellIn() - 1);
            }

            if ($item->getSellIn() < 0) {
                if ($item->getName() != 'Aged Brie') {
                    if ($item->getName() != 'Backstage passes to a TAFKAL80ETC concert') {
                        if ($item->getQuality() > 0) {
                            if ($item->getName() != 'Sulfuras, Hand of Ragnaros') {
                                $item->setQuality($item->getQuality() - 1);
                            }
                        }
                    } else {
                        $item->setQuality(0);
                    }
                } else {
                    if ($item->getQuality() < 50) {
                        $item->setQuality($item->getQuality() + 1);
                    }
                }
            }
        }
    }
}
