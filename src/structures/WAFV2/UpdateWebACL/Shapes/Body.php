<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'MATCH'|'NO_MATCH' $OversizeHandling
 */
class Body extends Shape
{
    /**
     * @param array{OversizeHandling?: 'CONTINUE'|'MATCH'|'NO_MATCH'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
