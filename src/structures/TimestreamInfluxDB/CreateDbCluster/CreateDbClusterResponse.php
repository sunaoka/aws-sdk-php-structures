<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $dbClusterId
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AVAILABLE'|'FAILED'|'DELETED'|'MAINTENANCE'|null $dbClusterStatus
 */
class CreateDbClusterResponse extends Response
{
}
