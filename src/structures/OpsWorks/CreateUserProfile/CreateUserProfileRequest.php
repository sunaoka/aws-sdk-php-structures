<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IamUserArn
 * @property string $SshUsername
 * @property string $SshPublicKey
 * @property bool $AllowSelfManagement
 */
class CreateUserProfileRequest extends Request
{
    /**
     * @param array{
     *     IamUserArn: string,
     *     SshUsername?: string,
     *     SshPublicKey?: string,
     *     AllowSelfManagement?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
