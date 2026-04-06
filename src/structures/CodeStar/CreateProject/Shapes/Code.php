<?php

namespace Sunaoka\Aws\Structures\CodeStar\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeSource $source
 * @property CodeDestination $destination
 */
class Code extends Shape
{
    /**
     * @param array{
     *     source: CodeSource,
     *     destination: CodeDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
