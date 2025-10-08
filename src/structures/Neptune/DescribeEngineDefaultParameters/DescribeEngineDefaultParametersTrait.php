<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeEngineDefaultParameters;

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
