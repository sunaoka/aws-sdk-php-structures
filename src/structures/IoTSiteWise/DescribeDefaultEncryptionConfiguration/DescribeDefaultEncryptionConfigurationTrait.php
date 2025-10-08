<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDefaultEncryptionConfiguration;

trait DescribeDefaultEncryptionConfigurationTrait
{
    /**
     * @param DescribeDefaultEncryptionConfigurationRequest $args
     * @return DescribeDefaultEncryptionConfigurationResponse
     */
    public function describeDefaultEncryptionConfiguration(DescribeDefaultEncryptionConfigurationRequest $args)
    {
        $result = parent::describeDefaultEncryptionConfiguration($args->toArray());
        return new DescribeDefaultEncryptionConfigurationResponse($result->toArray());
    }
}
