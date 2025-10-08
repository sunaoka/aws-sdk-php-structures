<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergePullRequestByFastForward;

trait MergePullRequestByFastForwardTrait
{
    /**
     * @param MergePullRequestByFastForwardRequest $args
     * @return MergePullRequestByFastForwardResponse
     */
    public function mergePullRequestByFastForward(MergePullRequestByFastForwardRequest $args)
    {
        $result = parent::mergePullRequestByFastForward($args->toArray());
        return new MergePullRequestByFastForwardResponse($result->toArray());
    }
}
