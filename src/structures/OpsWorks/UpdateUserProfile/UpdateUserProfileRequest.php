<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IamUserArn
 * @property string $SshUsername
 * @property string $SshPublicKey
 * @property bool $AllowSelfManagement
 */
class UpdateUserProfileRequest extends Request
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
