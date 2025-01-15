<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<string>|null $ChannelIds
 * @property 'ON_PREMISES'|null $ClusterType
 * @property string|null $Id
 * @property string|null $InstanceRoleArn
 * @property string|null $Name
 * @property ClusterNetworkSettings|null $NetworkSettings
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETE_FAILED'|'DELETED'|null $State
 */
class DescribeClusterSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ChannelIds?: list<string>|null,
     *     ClusterType?: 'ON_PREMISES'|null,
     *     Id?: string|null,
     *     InstanceRoleArn?: string|null,
     *     Name?: string|null,
     *     NetworkSettings?: ClusterNetworkSettings|null,
     *     State?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETE_FAILED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
