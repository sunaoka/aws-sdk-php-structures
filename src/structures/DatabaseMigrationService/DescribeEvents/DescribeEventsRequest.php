<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceIdentifier
 * @property 'replication-instance' $SourceType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $Duration
 * @property list<string> $EventCategories
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     SourceIdentifier?: string,
     *     SourceType?: 'replication-instance',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Duration?: int,
     *     EventCategories?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
