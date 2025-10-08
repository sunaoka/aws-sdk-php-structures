<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts;

trait BatchDescribeMergeConflictsTrait
{
    /**
     * @param BatchDescribeMergeConflictsRequest $args
     * @return BatchDescribeMergeConflictsResponse
     */
    public function batchDescribeMergeConflicts(BatchDescribeMergeConflictsRequest $args)
    {
        $result = parent::batchDescribeMergeConflicts($args->toArray());
        return new BatchDescribeMergeConflictsResponse($result->toArray());
    }
}
