<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserId
 */
class UserInfo extends Shape
{
    /**
     * @param array{UserId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
