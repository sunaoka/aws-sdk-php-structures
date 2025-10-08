<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeEngineDefaultClusterParameters;

trait DescribeEngineDefaultClusterParametersTrait
{
    /**
     * @param DescribeEngineDefaultClusterParametersRequest $args
     * @return DescribeEngineDefaultClusterParametersResponse
     */
    public function describeEngineDefaultClusterParameters(DescribeEngineDefaultClusterParametersRequest $args)
    {
        $result = parent::describeEngineDefaultClusterParameters($args->toArray());
        return new DescribeEngineDefaultClusterParametersResponse($result->toArray());
    }
}
