<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergePullRequestByThreeWay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $repositoryName
 * @property string $sourceCommitId
 * @property 'FILE_LEVEL'|'LINE_LEVEL' $conflictDetailLevel
 * @property 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE' $conflictResolutionStrategy
 * @property string $commitMessage
 * @property string $authorName
 * @property string $email
 * @property bool $keepEmptyFolders
 * @property Shapes\ConflictResolution $conflictResolution
 */
class MergePullRequestByThreeWayRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     repositoryName: string,
     *     sourceCommitId?: string,
     *     conflictDetailLevel?: 'FILE_LEVEL'|'LINE_LEVEL',
     *     conflictResolutionStrategy?: 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE',
     *     commitMessage?: string,
     *     authorName?: string,
     *     email?: string,
     *     keepEmptyFolders?: bool,
     *     conflictResolution?: Shapes\ConflictResolution
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
