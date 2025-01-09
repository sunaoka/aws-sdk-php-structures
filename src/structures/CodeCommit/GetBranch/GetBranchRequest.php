<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetBranch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $branchName
 */
class GetBranchRequest extends Request
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     branchName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
