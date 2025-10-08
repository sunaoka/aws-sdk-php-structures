<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetMergeCommit;

trait GetMergeCommitTrait
{
    /**
     * @param GetMergeCommitRequest $args
     * @return GetMergeCommitResponse
     */
    public function getMergeCommit(GetMergeCommitRequest $args)
    {
        $result = parent::getMergeCommit($args->toArray());
        return new GetMergeCommitResponse($result->toArray());
    }
}
