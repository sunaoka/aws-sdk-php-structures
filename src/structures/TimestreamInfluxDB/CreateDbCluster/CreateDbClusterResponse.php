<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $dbClusterId
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AVAILABLE'|'FAILED'|'DELETED'|'MAINTENANCE'|'UPDATING_INSTANCE_TYPE'|'REBOOTING'|'REBOOT_FAILED'|'PARTIALLY_AVAILABLE'|null $dbClusterStatus
 */
class CreateDbClusterResponse extends Response
{
}
