<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateBot;

trait UpdateBotTrait
{
    /**
     * @param UpdateBotRequest $args
     * @return UpdateBotResponse
     */
    public function updateBot(UpdateBotRequest $args)
    {
        $result = parent::updateBot($args->toArray());
        return new UpdateBotResponse($result->toArray());
    }
}
