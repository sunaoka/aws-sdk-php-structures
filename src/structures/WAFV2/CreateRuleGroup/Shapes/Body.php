<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'MATCH'|'NO_MATCH'|null $OversizeHandling
 */
class Body extends Shape
{
    /**
     * @param array{OversizeHandling?: 'CONTINUE'|'MATCH'|'NO_MATCH'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
