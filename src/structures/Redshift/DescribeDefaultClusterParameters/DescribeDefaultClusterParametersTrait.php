<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDefaultClusterParameters;

trait DescribeDefaultClusterParametersTrait
{
    /**
     * @param DescribeDefaultClusterParametersRequest $args
     * @return DescribeDefaultClusterParametersResponse
     */
    public function describeDefaultClusterParameters(DescribeDefaultClusterParametersRequest $args)
    {
        $result = parent::describeDefaultClusterParameters($args->toArray());
        return new DescribeDefaultClusterParametersResponse($result->toArray());
    }
}
