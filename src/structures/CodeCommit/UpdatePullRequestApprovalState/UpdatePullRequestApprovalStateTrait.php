<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestApprovalState;

trait UpdatePullRequestApprovalStateTrait
{
    /**
     * @param UpdatePullRequestApprovalStateRequest $args
     * @return void
     */
    public function updatePullRequestApprovalState(UpdatePullRequestApprovalStateRequest $args)
    {
        parent::updatePullRequestApprovalState($args->toArray());
    }
}
