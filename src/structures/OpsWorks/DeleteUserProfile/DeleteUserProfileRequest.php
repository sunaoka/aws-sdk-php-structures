<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeleteUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IamUserArn
 */
class DeleteUserProfileRequest extends Request
{
    /**
     * @param array{IamUserArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
