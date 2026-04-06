<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $passwordArn
 * @property string $user
 */
class WindowsUser extends Shape
{
    /**
     * @param array{
     *     passwordArn: string,
     *     user: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
