<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutAccessControlRule;

trait PutAccessControlRuleTrait
{
    /**
     * @param PutAccessControlRuleRequest $args
     * @return PutAccessControlRuleResponse
     */
    public function putAccessControlRule(PutAccessControlRuleRequest $args)
    {
        $result = parent::putAccessControlRule($args->toArray());
        return new PutAccessControlRuleResponse($result->toArray());
    }
}
