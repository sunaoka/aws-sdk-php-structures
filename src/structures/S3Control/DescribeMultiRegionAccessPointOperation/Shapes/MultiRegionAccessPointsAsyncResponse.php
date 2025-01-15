<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MultiRegionAccessPointRegionalResponse>|null $Regions
 */
class MultiRegionAccessPointsAsyncResponse extends Shape
{
    /**
     * @param array{Regions?: list<MultiRegionAccessPointRegionalResponse>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
