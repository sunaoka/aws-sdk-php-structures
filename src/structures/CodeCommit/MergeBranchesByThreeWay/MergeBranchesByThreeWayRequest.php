<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergeBranchesByThreeWay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $sourceCommitSpecifier
 * @property string $destinationCommitSpecifier
 * @property string|null $targetBranch
 * @property 'FILE_LEVEL'|'LINE_LEVEL'|null $conflictDetailLevel
 * @property 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE'|null $conflictResolutionStrategy
 * @property string|null $authorName
 * @property string|null $email
 * @property string|null $commitMessage
 * @property bool|null $keepEmptyFolders
 * @property Shapes\ConflictResolution|null $conflictResolution
 */
class MergeBranchesByThreeWayRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     sourceCommitSpecifier: string,
     *     destinationCommitSpecifier: string,
     *     targetBranch?: string|null,
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
