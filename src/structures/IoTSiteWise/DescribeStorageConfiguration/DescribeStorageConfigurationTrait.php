<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeStorageConfiguration;

trait DescribeStorageConfigurationTrait
{
    /**
     * @param DescribeStorageConfigurationRequest $args
     * @return DescribeStorageConfigurationResponse
     */
    public function describeStorageConfiguration(DescribeStorageConfigurationRequest $args)
    {
        $result = parent::describeStorageConfiguration($args->toArray());
        return new DescribeStorageConfigurationResponse($result->toArray());
    }
}
