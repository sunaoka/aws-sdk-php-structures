<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation;

trait DescribeMultiRegionAccessPointOperationTrait
{
    /**
     * @param DescribeMultiRegionAccessPointOperationRequest $args
     * @return DescribeMultiRegionAccessPointOperationResponse
     */
    public function describeMultiRegionAccessPointOperation(DescribeMultiRegionAccessPointOperationRequest $args)
    {
        $result = parent::describeMultiRegionAccessPointOperation($args->toArray());
        return new DescribeMultiRegionAccessPointOperationResponse($result->toArray());
    }
}
