<?php

namespace Sunaoka\Aws\Structures\Textract\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $State
 */
class SplitterConfiguration extends Shape
{
    /**
     * @param array{State: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
