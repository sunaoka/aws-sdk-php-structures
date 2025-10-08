<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateSipRule;

trait UpdateSipRuleTrait
{
    /**
     * @param UpdateSipRuleRequest $args
     * @return UpdateSipRuleResponse
     */
    public function updateSipRule(UpdateSipRuleRequest $args)
    {
        $result = parent::updateSipRule($args->toArray());
        return new UpdateSipRuleResponse($result->toArray());
    }
}
