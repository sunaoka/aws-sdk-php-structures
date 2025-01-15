<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MultiRegionAccessPointsAsyncResponse|null $MultiRegionAccessPointDetails
 * @property AsyncErrorDetails|null $ErrorDetails
 */
class AsyncResponseDetails extends Shape
{
    /**
     * @param array{
     *     MultiRegionAccessPointDetails?: MultiRegionAccessPointsAsyncResponse|null,
     *     ErrorDetails?: AsyncErrorDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
