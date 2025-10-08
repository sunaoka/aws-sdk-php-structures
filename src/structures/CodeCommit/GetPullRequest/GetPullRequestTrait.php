<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetPullRequest;

trait GetPullRequestTrait
{
    /**
     * @param GetPullRequestRequest $args
     * @return GetPullRequestResponse
     */
    public function getPullRequest(GetPullRequestRequest $args)
    {
        $result = parent::getPullRequest($args->toArray());
        return new GetPullRequestResponse($result->toArray());
    }
}
