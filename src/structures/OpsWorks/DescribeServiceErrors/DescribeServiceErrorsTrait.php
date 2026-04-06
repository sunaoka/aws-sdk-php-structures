<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeServiceErrors;

trait DescribeServiceErrorsTrait
{
    /**
     * @param DescribeServiceErrorsRequest $args
     * @return DescribeServiceErrorsResponse
     */
    public function describeServiceErrors(DescribeServiceErrorsRequest $args)
    {
        $result = parent::describeServiceErrors($args->toArray());
        return new DescribeServiceErrorsResponse($result->toArray());
    }
}
