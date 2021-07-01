<?php

namespace Runroom\GildedRose\Model;

class Item {

    function __construct(string $name, int $sell_in, int $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    /**
     * @var string
     */
    public string $name;

    /**
     * @var int
     */
    public int $sell_in;

    /**
     * @var int
     */
    public int $quality;


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getSellIn(): int
    {
        return $this->sell_in;
    }

    /**
     * @param int $sell_in
     */
    public function setSellIn(int $sell_in): void
    {
        $this->sell_in = $sell_in;
    }

    /**
     * @return int
     */
    public function getQuality(): int
    {
        return $this->quality;
    }

    /**
     * @param int $quality
     */
    public function setQuality(int $quality): void
    {
        $this->quality = $quality;
    }

    public function __toString() {
        return "{$this->getName()}, {$this->getSellIn()}, {$this->getQuality()}";
    }

}
