<?php

namespace Sunaoka\Aws\Structures\Iam\ChangePassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OldPassword
 * @property string $NewPassword
 */
class ChangePasswordRequest extends Request
{
    /**
     * @param array{
     *     OldPassword: string,
     *     NewPassword: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
