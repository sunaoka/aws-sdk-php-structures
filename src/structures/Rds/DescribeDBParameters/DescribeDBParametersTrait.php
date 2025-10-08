<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBParameters;

trait DescribeDBParametersTrait
{
    /**
     * @param DescribeDBParametersRequest $args
     * @return DescribeDBParametersResponse
     */
    public function describeDBParameters(DescribeDBParametersRequest $args)
    {
        $result = parent::describeDBParameters($args->toArray());
        return new DescribeDBParametersResponse($result->toArray());
    }
}
