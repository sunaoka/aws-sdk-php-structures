<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $RequestStatus
 */
class MultiRegionAccessPointRegionalResponse extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     RequestStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
