<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeGatewayCapabilityConfiguration;

trait DescribeGatewayCapabilityConfigurationTrait
{
    /**
     * @param DescribeGatewayCapabilityConfigurationRequest $args
     * @return DescribeGatewayCapabilityConfigurationResponse
     */
    public function describeGatewayCapabilityConfiguration(DescribeGatewayCapabilityConfigurationRequest $args)
    {
        $result = parent::describeGatewayCapabilityConfiguration($args->toArray());
        return new DescribeGatewayCapabilityConfigurationResponse($result->toArray());
    }
}
