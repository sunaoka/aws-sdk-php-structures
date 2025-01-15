<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteBranch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $branchName
 * @property string|null $commitId
 */
class BranchInfo extends Shape
{
    /**
     * @param array{
     *     branchName?: string|null,
     *     commitId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
