<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeEngineDefaultParameters;

trait DescribeEngineDefaultParametersTrait
{
    /**
     * @param DescribeEngineDefaultParametersRequest $args
     * @return DescribeEngineDefaultParametersResponse
     */
    public function describeEngineDefaultParameters(DescribeEngineDefaultParametersRequest $args)
    {
        $result = parent::describeEngineDefaultParameters($args->toArray());
        return new DescribeEngineDefaultParametersResponse($result->toArray());
    }
}
