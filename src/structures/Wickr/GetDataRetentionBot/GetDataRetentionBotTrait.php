<?php

namespace Sunaoka\Aws\Structures\Wickr\GetDataRetentionBot;

trait GetDataRetentionBotTrait
{
    /**
     * @param GetDataRetentionBotRequest $args
     * @return GetDataRetentionBotResponse
     */
    public function getDataRetentionBot(GetDataRetentionBotRequest $args)
    {
        $result = parent::getDataRetentionBot($args->toArray());
        return new GetDataRetentionBotResponse($result->toArray());
    }
}
