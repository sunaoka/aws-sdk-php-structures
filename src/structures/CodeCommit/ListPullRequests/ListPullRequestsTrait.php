<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListPullRequests;

trait ListPullRequestsTrait
{
    /**
     * @param ListPullRequestsRequest $args
     * @return ListPullRequestsResponse
     */
    public function listPullRequests(ListPullRequestsRequest $args)
    {
        $result = parent::listPullRequests($args->toArray());
        return new ListPullRequestsResponse($result->toArray());
    }
}
