<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string> $ChannelIds
 * @property 'ON_PREMISES' $ClusterType
 * @property string $Id
 * @property string $InstanceRoleArn
 * @property string $Name
 * @property ClusterNetworkSettings $NetworkSettings
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETE_FAILED'|'DELETED' $State
 */
class DescribeClusterSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ChannelIds?: list<string>,
     *     ClusterType?: 'ON_PREMISES',
     *     Id?: string,
     *     InstanceRoleArn?: string,
     *     Name?: string,
     *     NetworkSettings?: ClusterNetworkSettings,
     *     State?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETE_FAILED'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
