<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Sequence $Sequence
 */
class Detection extends Shape
{
    /**
     * @param array{Sequence?: Sequence} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
