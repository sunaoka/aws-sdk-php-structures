<?php

namespace Sunaoka\Aws\Structures\GameLift\ValidateMatchmakingRuleSet;

trait ValidateMatchmakingRuleSetTrait
{
    /**
     * @param ValidateMatchmakingRuleSetRequest $args
     * @return ValidateMatchmakingRuleSetResponse
     */
    public function validateMatchmakingRuleSet(ValidateMatchmakingRuleSetRequest $args)
    {
        $result = parent::validateMatchmakingRuleSet($args->toArray());
        return new ValidateMatchmakingRuleSetResponse($result->toArray());
    }
}
