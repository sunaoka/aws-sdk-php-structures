<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $RequestStatus
 */
class MultiRegionAccessPointRegionalResponse extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     RequestStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
