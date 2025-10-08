<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteCaseRule;

trait DeleteCaseRuleTrait
{
    /**
     * @param DeleteCaseRuleRequest $args
     * @return DeleteCaseRuleResponse
     */
    public function deleteCaseRule(DeleteCaseRuleRequest $args)
    {
        $result = parent::deleteCaseRule($args->toArray());
        return new DeleteCaseRuleResponse($result->toArray());
    }
}
