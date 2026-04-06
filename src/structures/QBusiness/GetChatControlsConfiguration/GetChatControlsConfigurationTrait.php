<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration;

trait GetChatControlsConfigurationTrait
{
    /**
     * @param GetChatControlsConfigurationRequest $args
     * @return GetChatControlsConfigurationResponse
     */
    public function getChatControlsConfiguration(GetChatControlsConfigurationRequest $args)
    {
        $result = parent::getChatControlsConfiguration($args->toArray());
        return new GetChatControlsConfigurationResponse($result->toArray());
    }
}
