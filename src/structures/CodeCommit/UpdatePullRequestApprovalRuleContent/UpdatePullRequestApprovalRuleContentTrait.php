<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestApprovalRuleContent;

trait UpdatePullRequestApprovalRuleContentTrait
{
    /**
     * @param UpdatePullRequestApprovalRuleContentRequest $args
     * @return UpdatePullRequestApprovalRuleContentResponse
     */
    public function updatePullRequestApprovalRuleContent(UpdatePullRequestApprovalRuleContentRequest $args)
    {
        $result = parent::updatePullRequestApprovalRuleContent($args->toArray());
        return new UpdatePullRequestApprovalRuleContentResponse($result->toArray());
    }
}
