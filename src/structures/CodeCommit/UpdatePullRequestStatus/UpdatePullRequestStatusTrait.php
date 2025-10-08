<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestStatus;

trait UpdatePullRequestStatusTrait
{
    /**
     * @param UpdatePullRequestStatusRequest $args
     * @return UpdatePullRequestStatusResponse
     */
    public function updatePullRequestStatus(UpdatePullRequestStatusRequest $args)
    {
        $result = parent::updatePullRequestStatus($args->toArray());
        return new UpdatePullRequestStatusResponse($result->toArray());
    }
}
