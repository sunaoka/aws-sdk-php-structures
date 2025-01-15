<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConflictMetadata|null $conflictMetadata
 * @property list<MergeHunk>|null $mergeHunks
 */
class Conflict extends Shape
{
    /**
     * @param array{
     *     conflictMetadata?: ConflictMetadata|null,
     *     mergeHunks?: list<MergeHunk>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
