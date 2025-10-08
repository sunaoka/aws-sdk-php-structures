<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetPullRequestOverrideState;

trait GetPullRequestOverrideStateTrait
{
    /**
     * @param GetPullRequestOverrideStateRequest $args
     * @return GetPullRequestOverrideStateResponse
     */
    public function getPullRequestOverrideState(GetPullRequestOverrideStateRequest $args)
    {
        $result = parent::getPullRequestOverrideState($args->toArray());
        return new GetPullRequestOverrideStateResponse($result->toArray());
    }
}
