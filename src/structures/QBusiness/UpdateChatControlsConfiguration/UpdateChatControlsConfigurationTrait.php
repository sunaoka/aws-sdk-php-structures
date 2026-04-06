<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration;

trait UpdateChatControlsConfigurationTrait
{
    /**
     * @param UpdateChatControlsConfigurationRequest $args
     * @return UpdateChatControlsConfigurationResponse
     */
    public function updateChatControlsConfiguration(UpdateChatControlsConfigurationRequest $args)
    {
        $result = parent::updateChatControlsConfiguration($args->toArray());
        return new UpdateChatControlsConfigurationResponse($result->toArray());
    }
}
