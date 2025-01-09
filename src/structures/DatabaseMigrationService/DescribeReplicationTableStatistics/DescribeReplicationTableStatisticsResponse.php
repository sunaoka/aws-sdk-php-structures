<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTableStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReplicationConfigArn
 * @property string $Marker
 * @property list<Shapes\TableStatistics> $ReplicationTableStatistics
 */
class DescribeReplicationTableStatisticsResponse extends Response
{
}
