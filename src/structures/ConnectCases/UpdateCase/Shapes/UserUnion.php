<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userArn
 * @property string|null $customEntity
 */
class UserUnion extends Shape
{
    /**
     * @param array{
     *     userArn?: string|null,
     *     customEntity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
