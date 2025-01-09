<?php

namespace Sunaoka\Aws\Structures\WorkMail\ResetPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $UserId
 * @property string $Password
 */
class ResetPasswordRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     UserId: string,
     *     Password: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
