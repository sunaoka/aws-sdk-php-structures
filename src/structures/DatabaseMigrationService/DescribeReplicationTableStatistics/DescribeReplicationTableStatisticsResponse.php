<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTableStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReplicationConfigArn
 * @property string|null $Marker
 * @property list<Shapes\TableStatistics>|null $ReplicationTableStatistics
 */
class DescribeReplicationTableStatisticsResponse extends Response
{
}
