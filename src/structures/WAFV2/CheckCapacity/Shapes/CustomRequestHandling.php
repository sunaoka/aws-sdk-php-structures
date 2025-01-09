<?php

namespace Sunaoka\Aws\Structures\WAFV2\CheckCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CustomHTTPHeader> $InsertHeaders
 */
class CustomRequestHandling extends Shape
{
    /**
     * @param array{InsertHeaders: list<CustomHTTPHeader>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
