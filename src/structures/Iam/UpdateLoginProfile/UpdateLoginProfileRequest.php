<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateLoginProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string|null $Password
 * @property bool|null $PasswordResetRequired
 */
class UpdateLoginProfileRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     Password?: string|null,
     *     PasswordResetRequired?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
