<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateDefaultBranch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $defaultBranchName
 */
class UpdateDefaultBranchRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     defaultBranchName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
