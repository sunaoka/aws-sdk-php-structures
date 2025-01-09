<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergeBranchesByThreeWay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $sourceCommitSpecifier
 * @property string $destinationCommitSpecifier
 * @property string $targetBranch
 * @property 'FILE_LEVEL'|'LINE_LEVEL' $conflictDetailLevel
 * @property 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE' $conflictResolutionStrategy
 * @property string $authorName
 * @property string $email
 * @property string $commitMessage
 * @property bool $keepEmptyFolders
 * @property Shapes\ConflictResolution $conflictResolution
 */
class MergeBranchesByThreeWayRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     sourceCommitSpecifier: string,
     *     destinationCommitSpecifier: string,
     *     targetBranch?: string,
     *     conflictDetailLevel?: 'FILE_LEVEL'|'LINE_LEVEL',
     *     conflictResolutionStrategy?: 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE',
     *     authorName?: string,
     *     email?: string,
     *     commitMessage?: string,
     *     keepEmptyFolders?: bool,
     *     conflictResolution?: Shapes\ConflictResolution
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
