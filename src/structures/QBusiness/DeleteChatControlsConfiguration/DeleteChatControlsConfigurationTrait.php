<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteChatControlsConfiguration;

trait DeleteChatControlsConfigurationTrait
{
    /**
     * @param DeleteChatControlsConfigurationRequest $args
     * @return DeleteChatControlsConfigurationResponse
     */
    public function deleteChatControlsConfiguration(DeleteChatControlsConfigurationRequest $args)
    {
        $result = parent::deleteChatControlsConfiguration($args->toArray());
        return new DeleteChatControlsConfigurationResponse($result->toArray());
    }
}
