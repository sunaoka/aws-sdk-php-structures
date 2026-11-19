<?php

namespace Sunaoka\Aws\Structures\Iam\CreateLoginProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string|null $Password
 * @property bool|null $PasswordResetRequired
 * @property int<3600, 7776000>|null $MaxSigninSessionDuration
 */
class CreateLoginProfileRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     Password?: string|null,
     *     PasswordResetRequired?: bool|null,
     *     MaxSigninSessionDuration?: int<3600, 7776000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
