<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterParameters;

trait DescribeClusterParametersTrait
{
    /**
     * @param DescribeClusterParametersRequest $args
     * @return DescribeClusterParametersResponse
     */
    public function describeClusterParameters(DescribeClusterParametersRequest $args)
    {
        $result = parent::describeClusterParameters($args->toArray());
        return new DescribeClusterParametersResponse($result->toArray());
    }
}
