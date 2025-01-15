<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribeMergeConflicts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $destinationCommitSpecifier
 * @property string $sourceCommitSpecifier
 * @property 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE' $mergeOption
 * @property int|null $maxMergeHunks
 * @property string $filePath
 * @property 'FILE_LEVEL'|'LINE_LEVEL'|null $conflictDetailLevel
 * @property 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE'|null $conflictResolutionStrategy
 * @property string|null $nextToken
 */
class DescribeMergeConflictsRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     destinationCommitSpecifier: string,
     *     sourceCommitSpecifier: string,
     *     mergeOption: 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE',
     *     maxMergeHunks?: int|null,
     *     filePath: string,
     *     conflictDetailLevel?: 'FILE_LEVEL'|'LINE_LEVEL'|null,
     *     conflictResolutionStrategy?: 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
