<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergePullRequestBySquash\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isMerged
 * @property string $mergedBy
 * @property string $mergeCommitId
 * @property 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE' $mergeOption
 */
class MergeMetadata extends Shape
{
    /**
     * @param array{
     *     isMerged?: bool,
     *     mergedBy?: string,
     *     mergeCommitId?: string,
     *     mergeOption?: 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
