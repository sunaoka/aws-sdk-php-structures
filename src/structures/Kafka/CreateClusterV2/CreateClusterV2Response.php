<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterArn
 * @property string $ClusterName
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING' $State
 * @property 'PROVISIONED'|'SERVERLESS' $ClusterType
 */
class CreateClusterV2Response extends Response
{
}
