<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $UserId
 */
class DeleteUserRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
