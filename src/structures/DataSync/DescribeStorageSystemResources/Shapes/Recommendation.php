<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StorageType
 * @property array<string, string> $StorageConfiguration
 * @property string $EstimatedMonthlyStorageCost
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     StorageType?: string,
     *     StorageConfiguration?: array<string, string>,
     *     EstimatedMonthlyStorageCost?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
