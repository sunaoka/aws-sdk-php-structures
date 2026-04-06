<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DetachManagedPolicyFromPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 * @property string $ManagedPolicyArn
 */
class DetachManagedPolicyFromPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     PermissionSetArn: string,
     *     ManagedPolicyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
