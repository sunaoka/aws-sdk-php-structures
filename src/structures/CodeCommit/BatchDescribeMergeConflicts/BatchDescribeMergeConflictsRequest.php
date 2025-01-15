<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $destinationCommitSpecifier
 * @property string $sourceCommitSpecifier
 * @property 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE' $mergeOption
 * @property int|null $maxMergeHunks
 * @property int|null $maxConflictFiles
 * @property list<string>|null $filePaths
 * @property 'FILE_LEVEL'|'LINE_LEVEL'|null $conflictDetailLevel
 * @property 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE'|null $conflictResolutionStrategy
 * @property string|null $nextToken
 */
class BatchDescribeMergeConflictsRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     destinationCommitSpecifier: string,
     *     sourceCommitSpecifier: string,
     *     mergeOption: 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE',
     *     maxMergeHunks?: int|null,
     *     maxConflictFiles?: int|null,
     *     filePaths?: list<string>|null,
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
