<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateChimeWebhookConfiguration;

trait UpdateChimeWebhookConfigurationTrait
{
    /**
     * @param UpdateChimeWebhookConfigurationRequest $args
     * @return UpdateChimeWebhookConfigurationResponse
     */
    public function updateChimeWebhookConfiguration(UpdateChimeWebhookConfigurationRequest $args)
    {
        $result = parent::updateChimeWebhookConfiguration($args->toArray());
        return new UpdateChimeWebhookConfigurationResponse($result->toArray());
    }
}
