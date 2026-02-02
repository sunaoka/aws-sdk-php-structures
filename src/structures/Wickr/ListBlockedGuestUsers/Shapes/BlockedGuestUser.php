<?php

namespace Sunaoka\Aws\Structures\Wickr\ListBlockedGuestUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $username
 * @property string $admin
 * @property string $modified
 * @property string $usernameHash
 */
class BlockedGuestUser extends Shape
{
    /**
     * @param array{
     *     username: string,
     *     admin: string,
     *     modified: string,
     *     usernameHash: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
