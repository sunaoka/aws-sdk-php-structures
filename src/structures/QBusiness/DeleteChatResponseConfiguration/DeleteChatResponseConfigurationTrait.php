<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteChatResponseConfiguration;

trait DeleteChatResponseConfigurationTrait
{
    /**
     * @param DeleteChatResponseConfigurationRequest $args
     * @return DeleteChatResponseConfigurationResponse
     */
    public function deleteChatResponseConfiguration(DeleteChatResponseConfigurationRequest $args)
    {
        $result = parent::deleteChatResponseConfiguration($args->toArray());
        return new DeleteChatResponseConfigurationResponse($result->toArray());
    }
}
