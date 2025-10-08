<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeEncryptionConfiguration;

trait DescribeEncryptionConfigurationTrait
{
    /**
     * @param DescribeEncryptionConfigurationRequest $args
     * @return DescribeEncryptionConfigurationResponse
     */
    public function describeEncryptionConfiguration(DescribeEncryptionConfigurationRequest $args)
    {
        $result = parent::describeEncryptionConfiguration($args->toArray());
        return new DescribeEncryptionConfigurationResponse($result->toArray());
    }
}
