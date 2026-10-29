<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetStorageInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $sizeInBytes
 * @property int $count
 */
class StorageMetrics extends Shape
{
    /**
     * @param array{
     *     sizeInBytes: int,
     *     count: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
