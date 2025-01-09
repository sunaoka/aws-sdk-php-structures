<?php

namespace Sunaoka\Aws\Structures\Iam\CreateLoginProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $Password
 * @property bool $PasswordResetRequired
 */
class CreateLoginProfileRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string,
     *     Password?: string,
     *     PasswordResetRequired?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
