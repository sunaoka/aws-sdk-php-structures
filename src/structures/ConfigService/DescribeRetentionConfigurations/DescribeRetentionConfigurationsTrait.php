<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRetentionConfigurations;

trait DescribeRetentionConfigurationsTrait
{
    /**
     * @param DescribeRetentionConfigurationsRequest $args
     * @return DescribeRetentionConfigurationsResponse
     */
    public function describeRetentionConfigurations(DescribeRetentionConfigurationsRequest $args)
    {
        $result = parent::describeRetentionConfigurations($args->toArray());
        return new DescribeRetentionConfigurationsResponse($result->toArray());
    }
}
