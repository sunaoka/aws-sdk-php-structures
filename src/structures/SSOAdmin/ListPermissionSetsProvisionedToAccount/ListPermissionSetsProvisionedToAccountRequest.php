<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSetsProvisionedToAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $InstanceArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property 'LATEST_PERMISSION_SET_PROVISIONED'|'LATEST_PERMISSION_SET_NOT_PROVISIONED' $ProvisioningStatus
 */
class ListPermissionSetsProvisionedToAccountRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     ProvisioningStatus?: 'LATEST_PERMISSION_SET_PROVISIONED'|'LATEST_PERMISSION_SET_NOT_PROVISIONED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
