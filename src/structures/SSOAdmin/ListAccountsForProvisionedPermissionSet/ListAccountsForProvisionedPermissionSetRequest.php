<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountsForProvisionedPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string $PermissionSetArn
 * @property 'LATEST_PERMISSION_SET_PROVISIONED'|'LATEST_PERMISSION_SET_NOT_PROVISIONED'|null $ProvisioningStatus
 */
class ListAccountsForProvisionedPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     PermissionSetArn: string,
     *     ProvisioningStatus?: 'LATEST_PERMISSION_SET_PROVISIONED'|'LATEST_PERMISSION_SET_NOT_PROVISIONED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
