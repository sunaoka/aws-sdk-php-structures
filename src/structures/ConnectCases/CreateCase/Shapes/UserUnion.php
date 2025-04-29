<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $customEntity
 * @property string|null $userArn
 */
class UserUnion extends Shape
{
    /**
     * @param array{
     *     customEntity?: string|null,
     *     userArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
