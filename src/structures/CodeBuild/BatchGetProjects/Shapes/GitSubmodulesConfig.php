<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $fetchSubmodules
 */
class GitSubmodulesConfig extends Shape
{
    /**
     * @param array{fetchSubmodules: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
