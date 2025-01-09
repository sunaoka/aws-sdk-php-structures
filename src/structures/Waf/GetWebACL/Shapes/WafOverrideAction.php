<?php

namespace Sunaoka\Aws\Structures\Waf\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'COUNT' $Type
 */
class WafOverrideAction extends Shape
{
    /**
     * @param array{Type: 'NONE'|'COUNT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
