<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string|null $NewPath
 * @property string|null $NewUserName
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     NewPath?: string|null,
     *     NewUserName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
