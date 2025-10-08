<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestTitle;

trait UpdatePullRequestTitleTrait
{
    /**
     * @param UpdatePullRequestTitleRequest $args
     * @return UpdatePullRequestTitleResponse
     */
    public function updatePullRequestTitle(UpdatePullRequestTitleRequest $args)
    {
        $result = parent::updatePullRequestTitle($args->toArray());
        return new UpdatePullRequestTitleResponse($result->toArray());
    }
}
