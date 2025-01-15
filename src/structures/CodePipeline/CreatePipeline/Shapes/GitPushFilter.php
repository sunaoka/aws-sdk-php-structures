<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitTagFilterCriteria|null $tags
 * @property GitBranchFilterCriteria|null $branches
 * @property GitFilePathFilterCriteria|null $filePaths
 */
class GitPushFilter extends Shape
{
    /**
     * @param array{
     *     tags?: GitTagFilterCriteria|null,
     *     branches?: GitBranchFilterCriteria|null,
     *     filePaths?: GitFilePathFilterCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
