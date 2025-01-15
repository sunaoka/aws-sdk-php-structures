<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterfacePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInterfaceId
 * @property string|null $AwsAccountId
 * @property string|null $AwsService
 * @property 'INSTANCE-ATTACH'|'EIP-ASSOCIATE' $Permission
 * @property bool|null $DryRun
 */
class CreateNetworkInterfacePermissionRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfaceId: string,
     *     AwsAccountId?: string|null,
     *     AwsService?: string|null,
     *     Permission: 'INSTANCE-ATTACH'|'EIP-ASSOCIATE',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
