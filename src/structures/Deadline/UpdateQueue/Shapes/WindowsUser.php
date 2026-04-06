<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $user
 * @property string $passwordArn
 */
class WindowsUser extends Shape
{
    /**
     * @param array{
     *     user: string,
     *     passwordArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
