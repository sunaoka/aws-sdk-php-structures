<?php

namespace Sunaoka\Aws\Structures\Odb\ListExascaleDbStorageVaults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $availableSizeInGBs
 * @property int|null $totalSizeInGBs
 */
class ExascaleDbStorageDetails extends Shape
{
    /**
     * @param array{
     *     availableSizeInGBs?: int|null,
     *     totalSizeInGBs?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
