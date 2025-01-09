<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetMergeOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $sourceCommitSpecifier
 * @property string $destinationCommitSpecifier
 * @property 'FILE_LEVEL'|'LINE_LEVEL' $conflictDetailLevel
 * @property 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE' $conflictResolutionStrategy
 */
class GetMergeOptionsRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     sourceCommitSpecifier: string,
     *     destinationCommitSpecifier: string,
     *     conflictDetailLevel?: 'FILE_LEVEL'|'LINE_LEVEL',
     *     conflictResolutionStrategy?: 'NONE'|'ACCEPT_SOURCE'|'ACCEPT_DESTINATION'|'AUTOMERGE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
