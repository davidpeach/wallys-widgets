<?php

class WallysWidgetsCalculator
{
    /**
     * @var array
     */
    private $packSizes = [];

    /**
     * Your solution should return an array with the pack sizes as the key
     * and the number of packs in that size as the value.
     *
     * Pack sizes that are not required should not be included.
     *
     * Example:
     *
     * getPacks(251, [
     *  250,
     *  500,
     *  1000
     * ])
     *
     * should return:
     *
     * [500 => 1]
     */
    public function getPacks(int $widgetsRequired, array $packSizes): array
    {
        $this->packSizes = $packSizes;

        foreach ($this->packSizes as $size) {
            if ($this->packSizeExists($size)) {
                return [$size => 1];
            }
        }

        return [];
    }

    /**
     * Determine if a given pack size exists in the available pack sizes.
     * @param  int  $size
     * @return bool
     */
    private function packSizeExists(int $size): bool
    {
        return in_array($size, $this->packSizes);
    }
}
