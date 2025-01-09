<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 */
class UserInfo extends Shape
{
    /**
     * @param array{UserId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
