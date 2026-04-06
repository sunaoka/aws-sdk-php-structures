<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StorageType
 * @property array<string, string>|null $StorageConfiguration
 * @property string|null $EstimatedMonthlyStorageCost
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     StorageType?: string|null,
     *     StorageConfiguration?: array<string, string>|null,
     *     EstimatedMonthlyStorageCost?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
