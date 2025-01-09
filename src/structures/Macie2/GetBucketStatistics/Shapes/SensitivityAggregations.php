<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $classifiableSizeInBytes
 * @property int $publiclyAccessibleCount
 * @property int $totalCount
 * @property int $totalSizeInBytes
 */
class SensitivityAggregations extends Shape
{
    /**
     * @param array{
     *     classifiableSizeInBytes?: int,
     *     publiclyAccessibleCount?: int,
     *     totalCount?: int,
     *     totalSizeInBytes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
