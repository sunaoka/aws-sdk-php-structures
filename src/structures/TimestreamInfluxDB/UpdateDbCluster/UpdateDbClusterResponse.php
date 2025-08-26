<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\UpdateDbCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AVAILABLE'|'FAILED'|'DELETED'|'MAINTENANCE'|null $dbClusterStatus
 */
class UpdateDbClusterResponse extends Response
{
}
