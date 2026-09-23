<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\DeleteRule;

trait DeleteRuleTrait
{
    /**
     * @param DeleteRuleRequest $args
     * @return void
     */
    public function deleteRule(DeleteRuleRequest $args)
    {
        parent::deleteRule($args->toArray());
    }
}
