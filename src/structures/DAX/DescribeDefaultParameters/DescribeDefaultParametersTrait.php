<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeDefaultParameters;

trait DescribeDefaultParametersTrait
{
    /**
     * @param DescribeDefaultParametersRequest $args
     * @return DescribeDefaultParametersResponse
     */
    public function describeDefaultParameters(DescribeDefaultParametersRequest $args)
    {
        $result = parent::describeDefaultParameters($args->toArray());
        return new DescribeDefaultParametersResponse($result->toArray());
    }
}
