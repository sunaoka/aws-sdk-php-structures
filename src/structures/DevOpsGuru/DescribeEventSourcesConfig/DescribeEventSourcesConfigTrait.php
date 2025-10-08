<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeEventSourcesConfig;

trait DescribeEventSourcesConfigTrait
{
    /**
     * @param DescribeEventSourcesConfigRequest $args
     * @return DescribeEventSourcesConfigResponse
     */
    public function describeEventSourcesConfig(DescribeEventSourcesConfigRequest $args)
    {
        $result = parent::describeEventSourcesConfig($args->toArray());
        return new DescribeEventSourcesConfigResponse($result->toArray());
    }
}
