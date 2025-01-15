<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property list<string>|null $ChannelIds
 * @property 'ON_PREMISES'|null $ClusterType
 * @property string|null $Id
 * @property string|null $InstanceRoleArn
 * @property string|null $Name
 * @property Shapes\ClusterNetworkSettings|null $NetworkSettings
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETE_FAILED'|'DELETED'|null $State
 */
class CreateClusterResponse extends Response
{
}
