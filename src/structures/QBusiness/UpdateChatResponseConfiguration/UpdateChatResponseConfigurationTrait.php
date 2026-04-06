<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatResponseConfiguration;

trait UpdateChatResponseConfigurationTrait
{
    /**
     * @param UpdateChatResponseConfigurationRequest $args
     * @return UpdateChatResponseConfigurationResponse
     */
    public function updateChatResponseConfiguration(UpdateChatResponseConfigurationRequest $args)
    {
        $result = parent::updateChatResponseConfiguration($args->toArray());
        return new UpdateChatResponseConfigurationResponse($result->toArray());
    }
}
