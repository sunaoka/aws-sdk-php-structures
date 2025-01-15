<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateMultiRegionAccessPointInput|null $CreateMultiRegionAccessPointRequest
 * @property DeleteMultiRegionAccessPointInput|null $DeleteMultiRegionAccessPointRequest
 * @property PutMultiRegionAccessPointPolicyInput|null $PutMultiRegionAccessPointPolicyRequest
 */
class AsyncRequestParameters extends Shape
{
    /**
     * @param array{
     *     CreateMultiRegionAccessPointRequest?: CreateMultiRegionAccessPointInput|null,
     *     DeleteMultiRegionAccessPointRequest?: DeleteMultiRegionAccessPointInput|null,
     *     PutMultiRegionAccessPointPolicyRequest?: PutMultiRegionAccessPointPolicyInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
