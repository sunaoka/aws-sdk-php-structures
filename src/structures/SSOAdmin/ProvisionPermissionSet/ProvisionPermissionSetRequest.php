<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ProvisionPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 * @property string|null $TargetId
 * @property 'AWS_ACCOUNT'|'ALL_PROVISIONED_ACCOUNTS' $TargetType
 */
class ProvisionPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     PermissionSetArn: string,
     *     TargetId?: string|null,
     *     TargetType: 'AWS_ACCOUNT'|'ALL_PROVISIONED_ACCOUNTS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
