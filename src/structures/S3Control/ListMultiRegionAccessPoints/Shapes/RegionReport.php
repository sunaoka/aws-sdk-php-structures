<?php

namespace Sunaoka\Aws\Structures\S3Control\ListMultiRegionAccessPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Region
 * @property string $BucketAccountId
 */
class RegionReport extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     Region?: string,
     *     BucketAccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
