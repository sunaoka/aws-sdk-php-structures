<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstanceLoggingConfigurations;

trait DescribeVerifiedAccessInstanceLoggingConfigurationsTrait
{
    /**
     * @param DescribeVerifiedAccessInstanceLoggingConfigurationsRequest $args
     * @return DescribeVerifiedAccessInstanceLoggingConfigurationsResponse
     */
    public function describeVerifiedAccessInstanceLoggingConfigurations(
        DescribeVerifiedAccessInstanceLoggingConfigurationsRequest $args,
    ) {
        $result = parent::describeVerifiedAccessInstanceLoggingConfigurations($args->toArray());
        return new DescribeVerifiedAccessInstanceLoggingConfigurationsResponse($result->toArray());
    }
}
