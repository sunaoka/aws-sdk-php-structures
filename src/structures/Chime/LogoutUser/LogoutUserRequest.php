<?php

namespace Sunaoka\Aws\Structures\Chime\LogoutUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $UserId
 */
class LogoutUserRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
