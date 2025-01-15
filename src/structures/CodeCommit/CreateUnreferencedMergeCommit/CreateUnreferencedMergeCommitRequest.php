<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateUnreferencedMergeCommit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $sourceCommitSpecifier
 * @property string $destinationCommitSpecifier
 * @property 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE' $mergeOption
 * @property 'FILE_LEVEL'|'LINE_LEVEL'|null $conflictDetailLevel
 * @property 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE'|null $conflictResolutionStrategy
 * @property string|null $authorName
 * @property string|null $email
 * @property string|null $commitMessage
 * @property bool|null $keepEmptyFolders
 * @property Shapes\ConflictResolution|null $conflictResolution
 */
class CreateUnreferencedMergeCommitRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     sourceCommitSpecifier: string,
     *     destinationCommitSpecifier: string,
     *     mergeOption: 'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE',
     *     conflictDetailLevel?: 'FILE_LEVEL'|'LINE_LEVEL'|null,
     *     conflictResolutionStrategy?: 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE'|null,
     *     authorName?: string|null,
     *     email?: string|null,
     *     commitMessage?: string|null,
     *     keepEmptyFolders?: bool|null,
     *     conflictResolution?: Shapes\ConflictResolution|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
