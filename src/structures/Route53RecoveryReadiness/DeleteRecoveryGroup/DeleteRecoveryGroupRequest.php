<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\DeleteRecoveryGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecoveryGroupName
 */
class DeleteRecoveryGroupRequest extends Request
{
    /**
     * @param array{RecoveryGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
