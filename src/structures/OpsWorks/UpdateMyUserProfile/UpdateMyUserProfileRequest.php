<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateMyUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SshPublicKey
 */
class UpdateMyUserProfileRequest extends Request
{
    /**
     * @param array{SshPublicKey?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
