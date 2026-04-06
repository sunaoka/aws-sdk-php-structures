<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $group
 * @property string $user
 */
class PosixUser extends Shape
{
    /**
     * @param array{
     *     group: string,
     *     user: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
