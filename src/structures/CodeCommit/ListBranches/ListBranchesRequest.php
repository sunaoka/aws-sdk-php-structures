<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListBranches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $nextToken
 */
class ListBranchesRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
