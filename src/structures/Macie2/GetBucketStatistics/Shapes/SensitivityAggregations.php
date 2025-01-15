<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $classifiableSizeInBytes
 * @property int|null $publiclyAccessibleCount
 * @property int|null $totalCount
 * @property int|null $totalSizeInBytes
 */
class SensitivityAggregations extends Shape
{
    /**
     * @param array{
     *     classifiableSizeInBytes?: int|null,
     *     publiclyAccessibleCount?: int|null,
     *     totalCount?: int|null,
     *     totalSizeInBytes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
