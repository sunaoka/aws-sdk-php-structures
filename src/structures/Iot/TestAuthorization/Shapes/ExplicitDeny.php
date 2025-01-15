<?php

namespace Sunaoka\Aws\Structures\Iot\TestAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Policy>|null $policies
 */
class ExplicitDeny extends Shape
{
    /**
     * @param array{policies?: list<Policy>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
