<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeTableStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeTableStatisticsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn: string,
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
