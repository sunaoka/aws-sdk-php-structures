<?php

namespace Sunaoka\Aws\Structures\Wickr\ListGuestUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $billingPeriod
 * @property string $username
 * @property string $usernameHash
 */
class GuestUser extends Shape
{
    /**
     * @param array{
     *     billingPeriod: string,
     *     username: string,
     *     usernameHash: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
