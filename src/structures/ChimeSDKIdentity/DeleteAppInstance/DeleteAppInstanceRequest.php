<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DeleteAppInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 */
class DeleteAppInstanceRequest extends Request
{
    /**
     * @param array{AppInstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
