<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBot;

trait DeleteBotTrait
{
    /**
     * @param DeleteBotRequest $args
     * @return DeleteBotResponse
     */
    public function deleteBot(DeleteBotRequest $args)
    {
        $result = parent::deleteBot($args->toArray());
        return new DeleteBotResponse($result->toArray());
    }
}
