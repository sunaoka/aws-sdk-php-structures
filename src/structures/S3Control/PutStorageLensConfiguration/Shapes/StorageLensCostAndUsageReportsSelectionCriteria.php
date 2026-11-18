<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 15>|null $MinDepth
 * @property int<1, 15>|null $MaxDepth
 */
class StorageLensCostAndUsageReportsSelectionCriteria extends Shape
{
    /**
     * @param array{
     *     MinDepth?: int<1, 15>|null,
     *     MaxDepth?: int<1, 15>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
