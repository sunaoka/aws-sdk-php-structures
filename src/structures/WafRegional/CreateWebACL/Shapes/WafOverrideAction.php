<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateWebACL\Shapes;

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
