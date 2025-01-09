<?php

namespace Sunaoka\Aws\Structures\Iot\TestAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Policy> $policies
 */
class ImplicitDeny extends Shape
{
    /**
     * @param array{policies?: list<Policy>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
