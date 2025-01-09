<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCK'|'ALLOW'|'COUNT' $Type
 */
class WafAction extends Shape
{
    /**
     * @param array{Type: 'BLOCK'|'ALLOW'|'COUNT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
