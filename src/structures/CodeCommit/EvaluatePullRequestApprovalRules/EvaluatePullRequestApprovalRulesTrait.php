<?php

namespace Sunaoka\Aws\Structures\CodeCommit\EvaluatePullRequestApprovalRules;

trait EvaluatePullRequestApprovalRulesTrait
{
    /**
     * @param EvaluatePullRequestApprovalRulesRequest $args
     * @return EvaluatePullRequestApprovalRulesResponse
     */
    public function evaluatePullRequestApprovalRules(EvaluatePullRequestApprovalRulesRequest $args)
    {
        $result = parent::evaluatePullRequestApprovalRules($args->toArray());
        return new EvaluatePullRequestApprovalRulesResponse($result->toArray());
    }
}
