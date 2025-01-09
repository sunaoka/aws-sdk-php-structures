<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateMultiRegionAccessPointInput $CreateMultiRegionAccessPointRequest
 * @property DeleteMultiRegionAccessPointInput $DeleteMultiRegionAccessPointRequest
 * @property PutMultiRegionAccessPointPolicyInput $PutMultiRegionAccessPointPolicyRequest
 */
class AsyncRequestParameters extends Shape
{
    /**
     * @param array{
     *     CreateMultiRegionAccessPointRequest?: CreateMultiRegionAccessPointInput,
     *     DeleteMultiRegionAccessPointRequest?: DeleteMultiRegionAccessPointInput,
     *     PutMultiRegionAccessPointPolicyRequest?: PutMultiRegionAccessPointPolicyInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
