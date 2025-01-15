<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetBranch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $repositoryName
 * @property string|null $branchName
 */
class GetBranchRequest extends Request
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     branchName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
