<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DetachCustomerManagedPolicyReferenceFromPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CustomerManagedPolicyReference $CustomerManagedPolicyReference
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 */
class DetachCustomerManagedPolicyReferenceFromPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     CustomerManagedPolicyReference: Shapes\CustomerManagedPolicyReference,
     *     InstanceArn: string,
     *     PermissionSetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
