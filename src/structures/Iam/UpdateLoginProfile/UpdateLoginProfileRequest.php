<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateLoginProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string|null $Password
 * @property bool|null $PasswordResetRequired
 * @property int<3600, 7776000>|null $MaxSigninSessionDuration
 * @property bool|null $ResetMaxSigninSessionDuration
 */
class UpdateLoginProfileRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     Password?: string|null,
     *     PasswordResetRequired?: bool|null,
     *     MaxSigninSessionDuration?: int<3600, 7776000>|null,
     *     ResetMaxSigninSessionDuration?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
