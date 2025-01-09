<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTableStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationConfigArn
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<Shapes\Filter> $Filters
 */
class DescribeReplicationTableStatisticsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationConfigArn: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
