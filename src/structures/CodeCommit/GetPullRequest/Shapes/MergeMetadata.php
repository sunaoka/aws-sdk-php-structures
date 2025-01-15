<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetPullRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isMerged
 * @property string|null $mergedBy
 * @property string|null $mergeCommitId
 * @property 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE'|null $mergeOption
 */
class MergeMetadata extends Shape
{
    /**
     * @param array{
     *     isMerged?: bool|null,
     *     mergedBy?: string|null,
     *     mergeCommitId?: string|null,
     *     mergeOption?: 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
