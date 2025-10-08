<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateUnreferencedMergeCommit;

trait CreateUnreferencedMergeCommitTrait
{
    /**
     * @param CreateUnreferencedMergeCommitRequest $args
     * @return CreateUnreferencedMergeCommitResponse
     */
    public function createUnreferencedMergeCommit(CreateUnreferencedMergeCommitRequest $args)
    {
        $result = parent::createUnreferencedMergeCommit($args->toArray());
        return new CreateUnreferencedMergeCommitResponse($result->toArray());
    }
}
