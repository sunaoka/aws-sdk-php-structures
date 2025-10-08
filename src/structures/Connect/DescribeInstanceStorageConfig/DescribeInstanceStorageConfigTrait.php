<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeInstanceStorageConfig;

trait DescribeInstanceStorageConfigTrait
{
    /**
     * @param DescribeInstanceStorageConfigRequest $args
     * @return DescribeInstanceStorageConfigResponse
     */
    public function describeInstanceStorageConfig(DescribeInstanceStorageConfigRequest $args)
    {
        $result = parent::describeInstanceStorageConfig($args->toArray());
        return new DescribeInstanceStorageConfigResponse($result->toArray());
    }
}
