<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreatePullRequest;

trait CreatePullRequestTrait
{
    /**
     * @param CreatePullRequestRequest $args
     * @return CreatePullRequestResponse
     */
    public function createPullRequest(CreatePullRequestRequest $args)
    {
        $result = parent::createPullRequest($args->toArray());
        return new CreatePullRequestResponse($result->toArray());
    }
}
