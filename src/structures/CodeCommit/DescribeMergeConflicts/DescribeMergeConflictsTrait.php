<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribeMergeConflicts;

trait DescribeMergeConflictsTrait
{
    /**
     * @param DescribeMergeConflictsRequest $args
     * @return DescribeMergeConflictsResponse
     */
    public function describeMergeConflicts(DescribeMergeConflictsRequest $args)
    {
        $result = parent::describeMergeConflicts($args->toArray());
        return new DescribeMergeConflictsResponse($result->toArray());
    }
}
