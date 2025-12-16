<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\DeleteDbCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AVAILABLE'|'FAILED'|'DELETED'|'MAINTENANCE'|'UPDATING_INSTANCE_TYPE'|'REBOOTING'|'REBOOT_FAILED'|'PARTIALLY_AVAILABLE'|null $dbClusterStatus
 */
class DeleteDbClusterResponse extends Response
{
}
