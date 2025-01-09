<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitTagFilterCriteria $tags
 * @property GitBranchFilterCriteria $branches
 * @property GitFilePathFilterCriteria $filePaths
 */
class GitPushFilter extends Shape
{
    /**
     * @param array{
     *     tags?: GitTagFilterCriteria,
     *     branches?: GitBranchFilterCriteria,
     *     filePaths?: GitFilePathFilterCriteria
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
