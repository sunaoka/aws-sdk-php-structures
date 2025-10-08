<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentsForPullRequest;

trait GetCommentsForPullRequestTrait
{
    /**
     * @param GetCommentsForPullRequestRequest $args
     * @return GetCommentsForPullRequestResponse
     */
    public function getCommentsForPullRequest(GetCommentsForPullRequestRequest $args)
    {
        $result = parent::getCommentsForPullRequest($args->toArray());
        return new GetCommentsForPullRequestResponse($result->toArray());
    }
}
