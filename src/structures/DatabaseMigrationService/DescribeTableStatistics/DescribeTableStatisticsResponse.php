<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeTableStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReplicationTaskArn
 * @property list<Shapes\TableStatistics> $TableStatistics
 * @property string $Marker
 */
class DescribeTableStatisticsResponse extends Response
{
}
