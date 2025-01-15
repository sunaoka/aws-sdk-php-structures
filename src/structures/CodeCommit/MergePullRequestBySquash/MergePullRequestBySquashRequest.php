<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergePullRequestBySquash;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $repositoryName
 * @property string|null $sourceCommitId
 * @property 'FILE_LEVEL'|'LINE_LEVEL'|null $conflictDetailLevel
 * @property 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE'|null $conflictResolutionStrategy
 * @property string|null $commitMessage
 * @property string|null $authorName
 * @property string|null $email
 * @property bool|null $keepEmptyFolders
 * @property Shapes\ConflictResolution|null $conflictResolution
 */
class MergePullRequestBySquashRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     repositoryName: string,
     *     sourceCommitId?: string|null,
     *     conflictDetailLevel?: 'FILE_LEVEL'|'LINE_LEVEL'|null,
     *     conflictResolutionStrategy?: 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE'|null,
     *     commitMessage?: string|null,
     *     authorName?: string|null,
     *     email?: string|null,
     *     keepEmptyFolders?: bool|null,
     *     conflictResolution?: Shapes\ConflictResolution|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
