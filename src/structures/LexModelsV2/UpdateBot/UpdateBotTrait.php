<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBot;

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
