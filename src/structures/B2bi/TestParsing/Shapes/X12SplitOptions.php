<?php

namespace Sunaoka\Aws\Structures\B2bi\TestParsing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'TRANSACTION' $splitBy
 */
class X12SplitOptions extends Shape
{
    /**
     * @param array{splitBy: 'NONE'|'TRANSACTION'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
