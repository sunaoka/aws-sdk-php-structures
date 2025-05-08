<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSetsProvisionedToAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $AccountId
 * @property 'LATEST_PERMISSION_SET_PROVISIONED'|'LATEST_PERMISSION_SET_NOT_PROVISIONED'|null $ProvisioningStatus
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPermissionSetsProvisionedToAccountRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     AccountId: string,
     *     ProvisioningStatus?: 'LATEST_PERMISSION_SET_PROVISIONED'|'LATEST_PERMISSION_SET_NOT_PROVISIONED'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
