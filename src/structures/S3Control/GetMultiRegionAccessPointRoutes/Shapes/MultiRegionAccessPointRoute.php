<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPointRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property string|null $Region
 * @property int<0, 100> $TrafficDialPercentage
 */
class MultiRegionAccessPointRoute extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Region?: string|null,
     *     TrafficDialPercentage: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
