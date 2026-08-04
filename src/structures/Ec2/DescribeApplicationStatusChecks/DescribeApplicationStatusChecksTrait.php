<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatusChecks;

trait DescribeApplicationStatusChecksTrait
{
    /**
     * @param DescribeApplicationStatusChecksRequest $args
     * @return DescribeApplicationStatusChecksResponse
     */
    public function describeApplicationStatusChecks(DescribeApplicationStatusChecksRequest $args)
    {
        $result = parent::describeApplicationStatusChecks($args->toArray());
        return new DescribeApplicationStatusChecksResponse($result->toArray());
    }
}
