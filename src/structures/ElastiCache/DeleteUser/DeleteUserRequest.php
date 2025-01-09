<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserId
 */
class DeleteUserRequest extends Request
{
    /**
     * @param array{UserId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
