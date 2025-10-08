<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteMatchmakingRuleSet;

trait DeleteMatchmakingRuleSetTrait
{
    /**
     * @param DeleteMatchmakingRuleSetRequest $args
     * @return DeleteMatchmakingRuleSetResponse
     */
    public function deleteMatchmakingRuleSet(DeleteMatchmakingRuleSetRequest $args)
    {
        $result = parent::deleteMatchmakingRuleSet($args->toArray());
        return new DeleteMatchmakingRuleSetResponse($result->toArray());
    }
}
