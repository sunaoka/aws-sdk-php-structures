<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $destinationCommitSpecifier
 * @property string $sourceCommitSpecifier
 * @property 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE' $mergeOption
 * @property int $maxMergeHunks
 * @property int $maxConflictFiles
 * @property list<string> $filePaths
 * @property 'FILE_LEVEL'|'LINE_LEVEL' $conflictDetailLevel
 * @property 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE' $conflictResolutionStrategy
 * @property string $nextToken
 */
class BatchDescribeMergeConflictsRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     destinationCommitSpecifier: string,
     *     sourceCommitSpecifier: string,
     *     mergeOption: 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE',
     *     maxMergeHunks?: int,
     *     maxConflictFiles?: int,
     *     filePaths?: list<string>,
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
