<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\UpdateAppInstanceBot;

trait UpdateAppInstanceBotTrait
{
    /**
     * @param UpdateAppInstanceBotRequest $args
     * @return UpdateAppInstanceBotResponse
     */
    public function updateAppInstanceBot(UpdateAppInstanceBotRequest $args)
    {
        $result = parent::updateAppInstanceBot($args->toArray());
        return new UpdateAppInstanceBotResponse($result->toArray());
    }
}
