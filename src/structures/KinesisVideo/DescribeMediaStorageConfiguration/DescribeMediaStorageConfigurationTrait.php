<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeMediaStorageConfiguration;

trait DescribeMediaStorageConfigurationTrait
{
    /**
     * @param DescribeMediaStorageConfigurationRequest $args
     * @return DescribeMediaStorageConfigurationResponse
     */
    public function describeMediaStorageConfiguration(DescribeMediaStorageConfigurationRequest $args)
    {
        $result = parent::describeMediaStorageConfiguration($args->toArray());
        return new DescribeMediaStorageConfigurationResponse($result->toArray());
    }
}
