<?php

namespace Sunaoka\Aws\Structures\QApps\ListQAppSessionData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userId
 */
class User extends Shape
{
    /**
     * @param array{userId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
