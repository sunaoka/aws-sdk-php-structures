<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IamUserArn
 * @property string|null $SshUsername
 * @property string|null $SshPublicKey
 * @property bool|null $AllowSelfManagement
 */
class CreateUserProfileRequest extends Request
{
    /**
     * @param array{
     *     IamUserArn: string,
     *     SshUsername?: string|null,
     *     SshPublicKey?: string|null,
     *     AllowSelfManagement?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
