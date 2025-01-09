<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $exact
 */
class SubjectAlternativeNameMatchers extends Shape
{
    /**
     * @param array{exact: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
