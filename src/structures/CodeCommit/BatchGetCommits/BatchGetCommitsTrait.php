<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetCommits;

trait BatchGetCommitsTrait
{
    /**
     * @param BatchGetCommitsRequest $args
     * @return BatchGetCommitsResponse
     */
    public function batchGetCommits(BatchGetCommitsRequest $args)
    {
        $result = parent::batchGetCommits($args->toArray());
        return new BatchGetCommitsResponse($result->toArray());
    }
}
