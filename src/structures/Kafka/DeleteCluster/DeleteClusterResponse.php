<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterArn
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING' $State
 */
class DeleteClusterResponse extends Response
{
}
