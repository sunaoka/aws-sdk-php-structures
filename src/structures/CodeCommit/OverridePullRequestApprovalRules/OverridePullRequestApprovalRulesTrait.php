<?php

namespace Sunaoka\Aws\Structures\CodeCommit\OverridePullRequestApprovalRules;

trait OverridePullRequestApprovalRulesTrait
{
    /**
     * @param OverridePullRequestApprovalRulesRequest $args
     * @return void
     */
    public function overridePullRequestApprovalRules(OverridePullRequestApprovalRulesRequest $args)
    {
        parent::overridePullRequestApprovalRules($args->toArray());
    }
}
