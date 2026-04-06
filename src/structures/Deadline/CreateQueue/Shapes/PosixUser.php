<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $user
 * @property string $group
 */
class PosixUser extends Shape
{
    /**
     * @param array{
     *     user: string,
     *     group: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
