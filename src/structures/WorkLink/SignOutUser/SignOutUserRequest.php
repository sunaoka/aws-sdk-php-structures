<?php

namespace Sunaoka\Aws\Structures\WorkLink\SignOutUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string $Username
 */
class SignOutUserRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
