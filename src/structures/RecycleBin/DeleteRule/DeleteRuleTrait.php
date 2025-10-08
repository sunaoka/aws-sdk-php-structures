<?php

namespace Sunaoka\Aws\Structures\RecycleBin\DeleteRule;

trait DeleteRuleTrait
{
    /**
     * @param DeleteRuleRequest $args
     * @return DeleteRuleResponse
     */
    public function deleteRule(DeleteRuleRequest $args)
    {
        $result = parent::deleteRule($args->toArray());
        return new DeleteRuleResponse($result->toArray());
    }
}
