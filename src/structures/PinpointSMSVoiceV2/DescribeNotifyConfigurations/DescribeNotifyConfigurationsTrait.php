<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeNotifyConfigurations;

trait DescribeNotifyConfigurationsTrait
{
    /**
     * @param DescribeNotifyConfigurationsRequest $args
     * @return DescribeNotifyConfigurationsResponse
     */
    public function describeNotifyConfigurations(DescribeNotifyConfigurationsRequest $args)
    {
        $result = parent::describeNotifyConfigurations($args->toArray());
        return new DescribeNotifyConfigurationsResponse($result->toArray());
    }
}
