<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\AttachCustomerManagedPolicyReferenceToPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 * @property Shapes\CustomerManagedPolicyReference $CustomerManagedPolicyReference
 */
class AttachCustomerManagedPolicyReferenceToPermissionSetRequest extends Request
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
