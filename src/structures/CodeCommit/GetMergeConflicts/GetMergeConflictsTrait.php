<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetMergeConflicts;

trait GetMergeConflictsTrait
{
    /**
     * @param GetMergeConflictsRequest $args
     * @return GetMergeConflictsResponse
     */
    public function getMergeConflicts(GetMergeConflictsRequest $args)
    {
        $result = parent::getMergeConflicts($args->toArray());
        return new GetMergeConflictsResponse($result->toArray());
    }
}
