<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetPullRequestApprovalStates;

trait GetPullRequestApprovalStatesTrait
{
    /**
     * @param GetPullRequestApprovalStatesRequest $args
     * @return GetPullRequestApprovalStatesResponse
     */
    public function getPullRequestApprovalStates(GetPullRequestApprovalStatesRequest $args)
    {
        $result = parent::getPullRequestApprovalStates($args->toArray());
        return new GetPullRequestApprovalStatesResponse($result->toArray());
    }
}
