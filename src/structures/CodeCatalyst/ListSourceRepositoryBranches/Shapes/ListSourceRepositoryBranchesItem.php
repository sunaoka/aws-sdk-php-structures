<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSourceRepositoryBranches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ref
 * @property string $name
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property string $headCommitId
 */
class ListSourceRepositoryBranchesItem extends Shape
{
    /**
     * @param array{
     *     ref?: string,
     *     name?: string,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     headCommitId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
