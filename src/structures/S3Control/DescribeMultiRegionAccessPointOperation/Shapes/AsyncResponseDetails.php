<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MultiRegionAccessPointsAsyncResponse $MultiRegionAccessPointDetails
 * @property AsyncErrorDetails $ErrorDetails
 */
class AsyncResponseDetails extends Shape
{
    /**
     * @param array{
     *     MultiRegionAccessPointDetails?: MultiRegionAccessPointsAsyncResponse,
     *     ErrorDetails?: AsyncErrorDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
