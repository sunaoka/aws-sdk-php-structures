<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomRequestHandling|null $CustomRequestHandling
 */
class CountAction extends Shape
{
    /**
     * @param array{CustomRequestHandling?: CustomRequestHandling|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
