<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeTableStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReplicationTaskArn
 * @property list<Shapes\TableStatistics>|null $TableStatistics
 * @property string|null $Marker
 */
class DescribeTableStatisticsResponse extends Response
{
}
