<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeResourceScan;

trait DescribeResourceScanTrait
{
    /**
     * @param DescribeResourceScanRequest $args
     * @return DescribeResourceScanResponse
     */
    public function describeResourceScan(DescribeResourceScanRequest $args)
    {
        $result = parent::describeResourceScan($args->toArray());
        return new DescribeResourceScanResponse($result->toArray());
    }
}
