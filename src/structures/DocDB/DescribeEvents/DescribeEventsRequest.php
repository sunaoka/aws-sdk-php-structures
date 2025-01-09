<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceIdentifier
 * @property 'db-instance'|'db-parameter-group'|'db-security-group'|'db-snapshot'|'db-cluster'|'db-cluster-snapshot' $SourceType
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
     *     SourceType?: 'db-instance'|'db-parameter-group'|'db-security-group'|'db-snapshot'|'db-cluster'|'db-cluster-snapshot',
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
