<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClusterArn
 * @property string|null $ClusterName
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING'|null $State
 * @property 'PROVISIONED'|'SERVERLESS'|null $ClusterType
 */
class CreateClusterV2Response extends Response
{
}
