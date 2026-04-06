<?php

namespace Sunaoka\Aws\Structures\Connect\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $AfterContactWorkTimeLimit
 */
class AfterContactWorkConfig extends Shape
{
    /**
     * @param array{AfterContactWorkTimeLimit?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
