<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig;

trait DescribeEndpointConfigTrait
{
    /**
     * @param DescribeEndpointConfigRequest $args
     * @return DescribeEndpointConfigResponse
     */
    public function describeEndpointConfig(DescribeEndpointConfigRequest $args)
    {
        $result = parent::describeEndpointConfig($args->toArray());
        return new DescribeEndpointConfigResponse($result->toArray());
    }
}
