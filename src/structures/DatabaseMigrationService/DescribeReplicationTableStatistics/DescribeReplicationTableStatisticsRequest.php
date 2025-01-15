<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTableStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationConfigArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeReplicationTableStatisticsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationConfigArn: string,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
