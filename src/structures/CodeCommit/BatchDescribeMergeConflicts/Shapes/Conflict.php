<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConflictMetadata $conflictMetadata
 * @property list<MergeHunk> $mergeHunks
 */
class Conflict extends Shape
{
    /**
     * @param array{
     *     conflictMetadata?: ConflictMetadata,
     *     mergeHunks?: list<MergeHunk>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
