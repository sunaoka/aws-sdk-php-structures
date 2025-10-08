<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeChimeWebhookConfigurations;

trait DescribeChimeWebhookConfigurationsTrait
{
    /**
     * @param DescribeChimeWebhookConfigurationsRequest $args
     * @return DescribeChimeWebhookConfigurationsResponse
     */
    public function describeChimeWebhookConfigurations(DescribeChimeWebhookConfigurationsRequest $args)
    {
        $result = parent::describeChimeWebhookConfigurations($args->toArray());
        return new DescribeChimeWebhookConfigurationsResponse($result->toArray());
    }
}
