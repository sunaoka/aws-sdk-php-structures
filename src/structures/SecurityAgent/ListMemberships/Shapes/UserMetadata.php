<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $username
 * @property string $email
 */
class UserMetadata extends Shape
{
    /**
     * @param array{
     *     username: string,
     *     email: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
