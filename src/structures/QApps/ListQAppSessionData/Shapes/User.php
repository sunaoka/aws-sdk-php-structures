<?php

namespace Sunaoka\Aws\Structures\QApps\ListQAppSessionData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userId
 */
class User extends Shape
{
    /**
     * @param array{userId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
