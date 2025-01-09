<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeTableStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<Shapes\Filter> $Filters
 */
class DescribeTableStatisticsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn: string,
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
