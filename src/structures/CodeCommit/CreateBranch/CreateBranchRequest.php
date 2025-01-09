<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateBranch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $branchName
 * @property string $commitId
 */
class CreateBranchRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     branchName: string,
     *     commitId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
