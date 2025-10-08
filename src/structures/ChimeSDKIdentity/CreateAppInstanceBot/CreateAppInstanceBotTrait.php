<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstanceBot;

trait CreateAppInstanceBotTrait
{
    /**
     * @param CreateAppInstanceBotRequest $args
     * @return CreateAppInstanceBotResponse
     */
    public function createAppInstanceBot(CreateAppInstanceBotRequest $args)
    {
        $result = parent::createAppInstanceBot($args->toArray());
        return new CreateAppInstanceBotResponse($result->toArray());
    }
}
