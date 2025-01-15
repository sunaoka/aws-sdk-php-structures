<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationInstanceTaskLogs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReplicationInstanceArn
 * @property list<Shapes\ReplicationInstanceTaskLog>|null $ReplicationInstanceTaskLogs
 * @property string|null $Marker
 */
class DescribeReplicationInstanceTaskLogsResponse extends Response
{
}
