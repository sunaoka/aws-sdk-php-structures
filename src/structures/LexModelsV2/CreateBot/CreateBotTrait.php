<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBot;

trait CreateBotTrait
{
    /**
     * @param CreateBotRequest $args
     * @return CreateBotResponse
     */
    public function createBot(CreateBotRequest $args)
    {
        $result = parent::createBot($args->toArray());
        return new CreateBotResponse($result->toArray());
    }
}
