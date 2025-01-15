<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'OPEN'|'UPDATED'|'CLOSED'>|null $events
 * @property GitBranchFilterCriteria|null $branches
 * @property GitFilePathFilterCriteria|null $filePaths
 */
class GitPullRequestFilter extends Shape
{
    /**
     * @param array{
     *     events?: list<'OPEN'|'UPDATED'|'CLOSED'>|null,
     *     branches?: GitBranchFilterCriteria|null,
     *     filePaths?: GitFilePathFilterCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
