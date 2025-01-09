<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubjectAlternativeNameMatchers $match
 */
class SubjectAlternativeNames extends Shape
{
    /**
     * @param array{match: SubjectAlternativeNameMatchers} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
