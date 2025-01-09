<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribeMergeConflicts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $destinationCommitSpecifier
 * @property string $sourceCommitSpecifier
 * @property 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE' $mergeOption
 * @property int $maxMergeHunks
 * @property string $filePath
 * @property 'FILE_LEVEL'|'LINE_LEVEL' $conflictDetailLevel
 * @property 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE' $conflictResolutionStrategy
 * @property string $nextToken
 */
class DescribeMergeConflictsRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     destinationCommitSpecifier: string,
     *     sourceCommitSpecifier: string,
     *     mergeOption: 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE',
     *     maxMergeHunks?: int,
     *     filePath: string,
     *     conflictDetailLevel?: 'FILE_LEVEL'|'LINE_LEVEL',
     *     conflictResolutionStrategy?: 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE',
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
