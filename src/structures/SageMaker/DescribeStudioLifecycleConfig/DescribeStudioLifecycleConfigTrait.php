<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeStudioLifecycleConfig;

trait DescribeStudioLifecycleConfigTrait
{
    /**
     * @param DescribeStudioLifecycleConfigRequest $args
     * @return DescribeStudioLifecycleConfigResponse
     */
    public function describeStudioLifecycleConfig(DescribeStudioLifecycleConfigRequest $args)
    {
        $result = parent::describeStudioLifecycleConfig($args->toArray());
        return new DescribeStudioLifecycleConfigResponse($result->toArray());
    }
}
