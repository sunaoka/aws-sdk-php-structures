<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MultiRegionAccessPointRegionalResponse> $Regions
 */
class MultiRegionAccessPointsAsyncResponse extends Shape
{
    /**
     * @param array{Regions?: list<MultiRegionAccessPointRegionalResponse>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
