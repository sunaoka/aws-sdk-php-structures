<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $NewPath
 * @property string $NewUserName
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     NewPath?: string,
     *     NewUserName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
