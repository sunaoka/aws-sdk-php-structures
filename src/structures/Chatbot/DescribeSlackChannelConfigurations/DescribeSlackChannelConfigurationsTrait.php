<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeSlackChannelConfigurations;

trait DescribeSlackChannelConfigurationsTrait
{
    /**
     * @param DescribeSlackChannelConfigurationsRequest $args
     * @return DescribeSlackChannelConfigurationsResponse
     */
    public function describeSlackChannelConfigurations(DescribeSlackChannelConfigurationsRequest $args)
    {
        $result = parent::describeSlackChannelConfigurations($args->toArray());
        return new DescribeSlackChannelConfigurationsResponse($result->toArray());
    }
}
