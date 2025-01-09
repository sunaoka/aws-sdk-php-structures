<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomRequestHandling $CustomRequestHandling
 */
class AllowAction extends Shape
{
    /**
     * @param array{CustomRequestHandling?: CustomRequestHandling} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
