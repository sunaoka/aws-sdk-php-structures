<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIWorkloadConfig;

trait DescribeAIWorkloadConfigTrait
{
    /**
     * @param DescribeAIWorkloadConfigRequest $args
     * @return DescribeAIWorkloadConfigResponse
     */
    public function describeAIWorkloadConfig(DescribeAIWorkloadConfigRequest $args)
    {
        $result = parent::describeAIWorkloadConfig($args->toArray());
        return new DescribeAIWorkloadConfigResponse($result->toArray());
    }
}
