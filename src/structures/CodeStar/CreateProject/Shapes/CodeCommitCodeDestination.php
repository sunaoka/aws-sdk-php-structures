<?php

namespace Sunaoka\Aws\Structures\CodeStar\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 */
class CodeCommitCodeDestination extends Shape
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
