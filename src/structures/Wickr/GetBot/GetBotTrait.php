<?php

namespace Sunaoka\Aws\Structures\Wickr\GetBot;

trait GetBotTrait
{
    /**
     * @param GetBotRequest $args
     * @return GetBotResponse
     */
    public function getBot(GetBotRequest $args)
    {
        $result = parent::getBot($args->toArray());
        return new GetBotResponse($result->toArray());
    }
}
