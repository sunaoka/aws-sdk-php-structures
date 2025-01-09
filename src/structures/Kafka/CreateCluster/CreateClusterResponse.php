<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterArn
 * @property string $ClusterName
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING' $State
 */
class CreateClusterResponse extends Response
{
}
