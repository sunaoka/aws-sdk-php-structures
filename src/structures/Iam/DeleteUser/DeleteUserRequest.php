<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 */
class DeleteUserRequest extends Request
{
    /**
     * @param array{UserName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
