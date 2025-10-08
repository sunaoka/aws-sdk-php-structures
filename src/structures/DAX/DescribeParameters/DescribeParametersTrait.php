<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeParameters;

trait DescribeParametersTrait
{
    /**
     * @param DescribeParametersRequest $args
     * @return DescribeParametersResponse
     */
    public function describeParameters(DescribeParametersRequest $args)
    {
        $result = parent::describeParameters($args->toArray());
        return new DescribeParametersResponse($result->toArray());
    }
}
