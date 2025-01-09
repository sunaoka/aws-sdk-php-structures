<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'OPEN'|'UPDATED'|'CLOSED'> $events
 * @property GitBranchFilterCriteria $branches
 * @property GitFilePathFilterCriteria $filePaths
 */
class GitPullRequestFilter extends Shape
{
    /**
     * @param array{
     *     events?: list<'OPEN'|'UPDATED'|'CLOSED'>,
     *     branches?: GitBranchFilterCriteria,
     *     filePaths?: GitFilePathFilterCriteria
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
