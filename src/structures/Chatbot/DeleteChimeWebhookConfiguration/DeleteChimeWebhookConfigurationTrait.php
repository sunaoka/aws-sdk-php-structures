<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteChimeWebhookConfiguration;

trait DeleteChimeWebhookConfigurationTrait
{
    /**
     * @param DeleteChimeWebhookConfigurationRequest $args
     * @return DeleteChimeWebhookConfigurationResponse
     */
    public function deleteChimeWebhookConfiguration(DeleteChimeWebhookConfigurationRequest $args)
    {
        $result = parent::deleteChimeWebhookConfiguration($args->toArray());
        return new DeleteChimeWebhookConfigurationResponse($result->toArray());
    }
}
