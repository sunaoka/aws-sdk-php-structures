<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountsForProvisionedPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $PermissionSetArn
 * @property 'LATEST_PERMISSION_SET_PROVISIONED'|'LATEST_PERMISSION_SET_NOT_PROVISIONED' $ProvisioningStatus
 */
class ListAccountsForProvisionedPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     PermissionSetArn: string,
     *     ProvisioningStatus?: 'LATEST_PERMISSION_SET_PROVISIONED'|'LATEST_PERMISSION_SET_NOT_PROVISIONED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
