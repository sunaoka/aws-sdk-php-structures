<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateChimeWebhookConfiguration;

trait CreateChimeWebhookConfigurationTrait
{
    /**
     * @param CreateChimeWebhookConfigurationRequest $args
     * @return CreateChimeWebhookConfigurationResponse
     */
    public function createChimeWebhookConfiguration(CreateChimeWebhookConfigurationRequest $args)
    {
        $result = parent::createChimeWebhookConfiguration($args->toArray());
        return new CreateChimeWebhookConfigurationResponse($result->toArray());
    }
}
