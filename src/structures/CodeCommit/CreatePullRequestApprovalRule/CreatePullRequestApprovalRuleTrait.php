<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreatePullRequestApprovalRule;

trait CreatePullRequestApprovalRuleTrait
{
    /**
     * @param CreatePullRequestApprovalRuleRequest $args
     * @return CreatePullRequestApprovalRuleResponse
     */
    public function createPullRequestApprovalRule(CreatePullRequestApprovalRuleRequest $args)
    {
        $result = parent::createPullRequestApprovalRule($args->toArray());
        return new CreatePullRequestApprovalRuleResponse($result->toArray());
    }
}
