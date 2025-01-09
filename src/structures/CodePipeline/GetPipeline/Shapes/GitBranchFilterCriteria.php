<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $includes
 * @property list<string> $excludes
 */
class GitBranchFilterCriteria extends Shape
{
    /**
     * @param array{
     *     includes?: list<string>,
     *     excludes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
