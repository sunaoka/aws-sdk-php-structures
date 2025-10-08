<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBClusterParameters;

trait DescribeDBClusterParametersTrait
{
    /**
     * @param DescribeDBClusterParametersRequest $args
     * @return DescribeDBClusterParametersResponse
     */
    public function describeDBClusterParameters(DescribeDBClusterParametersRequest $args)
    {
        $result = parent::describeDBClusterParameters($args->toArray());
        return new DescribeDBClusterParametersResponse($result->toArray());
    }
}
