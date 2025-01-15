<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClusterArn
 * @property string|null $ClusterName
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING'|null $State
 */
class CreateClusterResponse extends Response
{
}
