<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateMatchmakingRuleSet;

trait CreateMatchmakingRuleSetTrait
{
    /**
     * @param CreateMatchmakingRuleSetRequest $args
     * @return CreateMatchmakingRuleSetResponse
     */
    public function createMatchmakingRuleSet(CreateMatchmakingRuleSetRequest $args)
    {
        $result = parent::createMatchmakingRuleSet($args->toArray());
        return new CreateMatchmakingRuleSetResponse($result->toArray());
    }
}
