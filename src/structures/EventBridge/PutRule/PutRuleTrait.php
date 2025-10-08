<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutRule;

trait PutRuleTrait
{
    /**
     * @param PutRuleRequest $args
     * @return PutRuleResponse
     */
    public function putRule(PutRuleRequest $args)
    {
        $result = parent::putRule($args->toArray());
        return new PutRuleResponse($result->toArray());
    }
}
