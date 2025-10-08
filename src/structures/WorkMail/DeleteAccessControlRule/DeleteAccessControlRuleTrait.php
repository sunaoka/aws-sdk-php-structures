<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteAccessControlRule;

trait DeleteAccessControlRuleTrait
{
    /**
     * @param DeleteAccessControlRuleRequest $args
     * @return DeleteAccessControlRuleResponse
     */
    public function deleteAccessControlRule(DeleteAccessControlRuleRequest $args)
    {
        $result = parent::deleteAccessControlRule($args->toArray());
        return new DeleteAccessControlRuleResponse($result->toArray());
    }
}
