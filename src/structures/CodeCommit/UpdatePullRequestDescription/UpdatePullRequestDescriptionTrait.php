<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestDescription;

trait UpdatePullRequestDescriptionTrait
{
    /**
     * @param UpdatePullRequestDescriptionRequest $args
     * @return UpdatePullRequestDescriptionResponse
     */
    public function updatePullRequestDescription(UpdatePullRequestDescriptionRequest $args)
    {
        $result = parent::updatePullRequestDescription($args->toArray());
        return new UpdatePullRequestDescriptionResponse($result->toArray());
    }
}
