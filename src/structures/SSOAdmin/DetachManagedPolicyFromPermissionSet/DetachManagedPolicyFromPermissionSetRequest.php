<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DetachManagedPolicyFromPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $ManagedPolicyArn
 * @property string $PermissionSetArn
 */
class DetachManagedPolicyFromPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     ManagedPolicyArn: string,
     *     PermissionSetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
