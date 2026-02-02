<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\RebootDbCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AVAILABLE'|'FAILED'|'DELETED'|'MAINTENANCE'|'UPDATING_INSTANCE_TYPE'|'REBOOTING'|'REBOOT_FAILED'|'PARTIALLY_AVAILABLE'|null $dbClusterStatus
 */
class RebootDbClusterResponse extends Response
{
}
