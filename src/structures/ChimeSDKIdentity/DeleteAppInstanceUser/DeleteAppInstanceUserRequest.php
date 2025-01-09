<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DeleteAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 */
class DeleteAppInstanceUserRequest extends Request
{
    /**
     * @param array{AppInstanceUserArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
