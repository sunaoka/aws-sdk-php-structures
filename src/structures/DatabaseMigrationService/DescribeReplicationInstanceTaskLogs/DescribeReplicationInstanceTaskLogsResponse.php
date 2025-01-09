<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationInstanceTaskLogs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReplicationInstanceArn
 * @property list<Shapes\ReplicationInstanceTaskLog> $ReplicationInstanceTaskLogs
 * @property string $Marker
 */
class DescribeReplicationInstanceTaskLogsResponse extends Response
{
}
