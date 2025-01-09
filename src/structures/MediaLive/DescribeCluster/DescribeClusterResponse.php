<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property list<string> $ChannelIds
 * @property 'ON_PREMISES' $ClusterType
 * @property string $Id
 * @property string $InstanceRoleArn
 * @property string $Name
 * @property Shapes\ClusterNetworkSettings $NetworkSettings
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETE_FAILED'|'DELETED' $State
 */
class DescribeClusterResponse extends Response
{
}
