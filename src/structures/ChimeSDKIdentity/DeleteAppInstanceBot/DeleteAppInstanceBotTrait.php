<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DeleteAppInstanceBot;

trait DeleteAppInstanceBotTrait
{
    /**
     * @param DeleteAppInstanceBotRequest $args
     * @return void
     */
    public function deleteAppInstanceBot(DeleteAppInstanceBotRequest $args)
    {
        parent::deleteAppInstanceBot($args->toArray());
    }
}
