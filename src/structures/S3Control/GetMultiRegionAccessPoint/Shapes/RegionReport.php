<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property string|null $Region
 * @property string|null $BucketAccountId
 */
class RegionReport extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Region?: string|null,
     *     BucketAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
