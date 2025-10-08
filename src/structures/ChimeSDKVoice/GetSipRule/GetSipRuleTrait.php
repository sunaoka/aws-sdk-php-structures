<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetSipRule;

trait GetSipRuleTrait
{
    /**
     * @param GetSipRuleRequest $args
     * @return GetSipRuleResponse
     */
    public function getSipRule(GetSipRuleRequest $args)
    {
        $result = parent::getSipRule($args->toArray());
        return new GetSipRuleResponse($result->toArray());
    }
}
