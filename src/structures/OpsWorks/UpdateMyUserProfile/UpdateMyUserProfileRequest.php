<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateMyUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SshPublicKey
 */
class UpdateMyUserProfileRequest extends Request
{
    /**
     * @param array{SshPublicKey?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
