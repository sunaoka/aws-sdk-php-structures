<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationOperation;

trait DescribeApplicationOperationTrait
{
    /**
     * @param DescribeApplicationOperationRequest $args
     * @return DescribeApplicationOperationResponse
     */
    public function describeApplicationOperation(DescribeApplicationOperationRequest $args)
    {
        $result = parent::describeApplicationOperation($args->toArray());
        return new DescribeApplicationOperationResponse($result->toArray());
    }
}
