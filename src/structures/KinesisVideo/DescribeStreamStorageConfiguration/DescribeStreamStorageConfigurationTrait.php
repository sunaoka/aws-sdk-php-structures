<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeStreamStorageConfiguration;

trait DescribeStreamStorageConfigurationTrait
{
    /**
     * @param DescribeStreamStorageConfigurationRequest $args
     * @return DescribeStreamStorageConfigurationResponse
     */
    public function describeStreamStorageConfiguration(DescribeStreamStorageConfigurationRequest $args)
    {
        $result = parent::describeStreamStorageConfiguration($args->toArray());
        return new DescribeStreamStorageConfigurationResponse($result->toArray());
    }
}
