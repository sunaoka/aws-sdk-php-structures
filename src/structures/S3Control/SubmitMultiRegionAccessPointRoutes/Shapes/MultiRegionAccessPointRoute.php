<?php

namespace Sunaoka\Aws\Structures\S3Control\SubmitMultiRegionAccessPointRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Region
 * @property int<0, 100> $TrafficDialPercentage
 */
class MultiRegionAccessPointRoute extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     Region?: string,
     *     TrafficDialPercentage: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
