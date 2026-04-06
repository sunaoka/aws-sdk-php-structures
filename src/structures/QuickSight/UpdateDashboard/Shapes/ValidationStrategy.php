<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRICT'|'LENIENT' $Mode
 */
class ValidationStrategy extends Shape
{
    /**
     * @param array{Mode: 'STRICT'|'LENIENT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
