<?php

namespace Sunaoka\Aws\Structures\MQ\DeleteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 * @property string $Username
 */
class DeleteUserRequest extends Request
{
    /**
     * @param array{
     *     BrokerId: string,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
