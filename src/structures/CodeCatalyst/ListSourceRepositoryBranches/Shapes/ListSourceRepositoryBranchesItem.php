<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSourceRepositoryBranches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ref
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property string|null $headCommitId
 */
class ListSourceRepositoryBranchesItem extends Shape
{
    /**
     * @param array{
     *     ref?: string|null,
     *     name?: string|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     headCommitId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
