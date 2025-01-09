<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateLoginProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $Password
 * @property bool $PasswordResetRequired
 */
class UpdateLoginProfileRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     Password?: string,
     *     PasswordResetRequired?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
