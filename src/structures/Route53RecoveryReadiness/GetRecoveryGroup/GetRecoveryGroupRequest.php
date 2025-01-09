<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetRecoveryGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecoveryGroupName
 */
class GetRecoveryGroupRequest extends Request
{
    /**
     * @param array{RecoveryGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
