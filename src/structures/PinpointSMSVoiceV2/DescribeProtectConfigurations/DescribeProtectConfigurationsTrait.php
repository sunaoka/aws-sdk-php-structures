<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeProtectConfigurations;

trait DescribeProtectConfigurationsTrait
{
    /**
     * @param DescribeProtectConfigurationsRequest $args
     * @return DescribeProtectConfigurationsResponse
     */
    public function describeProtectConfigurations(DescribeProtectConfigurationsRequest $args)
    {
        $result = parent::describeProtectConfigurations($args->toArray());
        return new DescribeProtectConfigurationsResponse($result->toArray());
    }
}
