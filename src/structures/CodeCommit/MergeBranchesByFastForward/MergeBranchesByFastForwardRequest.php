<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergeBranchesByFastForward;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $sourceCommitSpecifier
 * @property string $destinationCommitSpecifier
 * @property string|null $targetBranch
 */
class MergeBranchesByFastForwardRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     sourceCommitSpecifier: string,
     *     destinationCommitSpecifier: string,
     *     targetBranch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
