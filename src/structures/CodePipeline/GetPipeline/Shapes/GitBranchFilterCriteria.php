<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $includes
 * @property list<string>|null $excludes
 */
class GitBranchFilterCriteria extends Shape
{
    /**
     * @param array{
     *     includes?: list<string>|null,
     *     excludes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
