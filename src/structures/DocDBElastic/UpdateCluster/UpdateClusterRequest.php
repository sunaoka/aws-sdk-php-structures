<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $adminUserPassword
 * @property 'PLAIN_TEXT'|'SECRET_ARN'|null $authType
 * @property string|null $clientToken
 * @property string $clusterArn
 * @property string|null $preferredMaintenanceWindow
 * @property int|null $shardCapacity
 * @property int|null $shardCount
 * @property list<string>|null $subnetIds
 * @property list<string>|null $vpcSecurityGroupIds
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     adminUserPassword?: string|null,
     *     authType?: 'PLAIN_TEXT'|'SECRET_ARN'|null,
     *     clientToken?: string|null,
     *     clusterArn: string,
     *     preferredMaintenanceWindow?: string|null,
     *     shardCapacity?: int|null,
     *     shardCount?: int|null,
     *     subnetIds?: list<string>|null,
     *     vpcSecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
