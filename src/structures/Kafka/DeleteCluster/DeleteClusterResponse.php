<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClusterArn
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING'|null $State
 */
class DeleteClusterResponse extends Response
{
}
