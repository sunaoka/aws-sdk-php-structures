<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergePullRequestBySquash;

trait MergePullRequestBySquashTrait
{
    /**
     * @param MergePullRequestBySquashRequest $args
     * @return MergePullRequestBySquashResponse
     */
    public function mergePullRequestBySquash(MergePullRequestBySquashRequest $args)
    {
        $result = parent::mergePullRequestBySquash($args->toArray());
        return new MergePullRequestBySquashResponse($result->toArray());
    }
}
