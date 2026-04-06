<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateChatResponseConfiguration;

trait CreateChatResponseConfigurationTrait
{
    /**
     * @param CreateChatResponseConfigurationRequest $args
     * @return CreateChatResponseConfigurationResponse
     */
    public function createChatResponseConfiguration(CreateChatResponseConfigurationRequest $args)
    {
        $result = parent::createChatResponseConfiguration($args->toArray());
        return new CreateChatResponseConfigurationResponse($result->toArray());
    }
}
