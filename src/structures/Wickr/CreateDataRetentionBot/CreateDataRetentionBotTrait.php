<?php

namespace Sunaoka\Aws\Structures\Wickr\CreateDataRetentionBot;

trait CreateDataRetentionBotTrait
{
    /**
     * @param CreateDataRetentionBotRequest $args
     * @return CreateDataRetentionBotResponse
     */
    public function createDataRetentionBot(CreateDataRetentionBotRequest $args)
    {
        $result = parent::createDataRetentionBot($args->toArray());
        return new CreateDataRetentionBotResponse($result->toArray());
    }
}
