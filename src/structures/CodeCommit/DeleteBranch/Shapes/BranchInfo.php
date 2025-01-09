<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteBranch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $branchName
 * @property string $commitId
 */
class BranchInfo extends Shape
{
    /**
     * @param array{
     *     branchName?: string,
     *     commitId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
