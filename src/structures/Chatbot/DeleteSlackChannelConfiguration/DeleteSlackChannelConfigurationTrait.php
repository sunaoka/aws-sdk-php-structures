<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteSlackChannelConfiguration;

trait DeleteSlackChannelConfigurationTrait
{
    /**
     * @param DeleteSlackChannelConfigurationRequest $args
     * @return DeleteSlackChannelConfigurationResponse
     */
    public function deleteSlackChannelConfiguration(DeleteSlackChannelConfigurationRequest $args)
    {
        $result = parent::deleteSlackChannelConfiguration($args->toArray());
        return new DeleteSlackChannelConfigurationResponse($result->toArray());
    }
}
