<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterfacePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInterfaceId
 * @property string $AwsAccountId
 * @property string $AwsService
 * @property 'INSTANCE-ATTACH'|'EIP-ASSOCIATE' $Permission
 * @property bool $DryRun
 */
class CreateNetworkInterfacePermissionRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfaceId: string,
     *     AwsAccountId?: string,
     *     AwsService?: string,
     *     Permission: 'INSTANCE-ATTACH'|'EIP-ASSOCIATE',
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
