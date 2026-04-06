<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DetachCustomerManagedPolicyReferenceFromPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 * @property Shapes\CustomerManagedPolicyReference $CustomerManagedPolicyReference
 */
class DetachCustomerManagedPolicyReferenceFromPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     PermissionSetArn: string,
     *     CustomerManagedPolicyReference: Shapes\CustomerManagedPolicyReference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
