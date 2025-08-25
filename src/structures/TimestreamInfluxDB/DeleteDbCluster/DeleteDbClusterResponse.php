<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\DeleteDbCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AVAILABLE'|'FAILED'|'DELETED'|'MAINTENANCE'|null $dbClusterStatus
 */
class DeleteDbClusterResponse extends Response
{
}
