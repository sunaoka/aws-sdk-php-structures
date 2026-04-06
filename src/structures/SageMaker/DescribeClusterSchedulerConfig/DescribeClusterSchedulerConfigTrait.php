<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterSchedulerConfig;

trait DescribeClusterSchedulerConfigTrait
{
    /**
     * @param DescribeClusterSchedulerConfigRequest $args
     * @return DescribeClusterSchedulerConfigResponse
     */
    public function describeClusterSchedulerConfig(DescribeClusterSchedulerConfigRequest $args)
    {
        $result = parent::describeClusterSchedulerConfig($args->toArray());
        return new DescribeClusterSchedulerConfigResponse($result->toArray());
    }
}
