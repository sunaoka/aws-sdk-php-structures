<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeletePullRequestApprovalRule;

trait DeletePullRequestApprovalRuleTrait
{
    /**
     * @param DeletePullRequestApprovalRuleRequest $args
     * @return DeletePullRequestApprovalRuleResponse
     */
    public function deletePullRequestApprovalRule(DeletePullRequestApprovalRuleRequest $args)
    {
        $result = parent::deletePullRequestApprovalRule($args->toArray());
        return new DeletePullRequestApprovalRuleResponse($result->toArray());
    }
}
