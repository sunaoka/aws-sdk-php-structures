<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteBranch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $branchName
 */
class DeleteBranchRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     branchName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
