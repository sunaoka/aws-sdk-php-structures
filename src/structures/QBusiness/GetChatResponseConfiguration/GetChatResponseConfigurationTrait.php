<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatResponseConfiguration;

trait GetChatResponseConfigurationTrait
{
    /**
     * @param GetChatResponseConfigurationRequest $args
     * @return GetChatResponseConfigurationResponse
     */
    public function getChatResponseConfiguration(GetChatResponseConfigurationRequest $args)
    {
        $result = parent::getChatResponseConfiguration($args->toArray());
        return new GetChatResponseConfigurationResponse($result->toArray());
    }
}
