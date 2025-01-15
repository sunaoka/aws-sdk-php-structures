<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceIdentifier
 * @property 'db-instance'|'db-parameter-group'|'db-security-group'|'db-snapshot'|'db-cluster'|'db-cluster-snapshot'|null $SourceType
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int|null $Duration
 * @property list<string>|null $EventCategories
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     SourceIdentifier?: string|null,
     *     SourceType?: 'db-instance'|'db-parameter-group'|'db-security-group'|'db-snapshot'|'db-cluster'|'db-cluster-snapshot'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Duration?: int|null,
     *     EventCategories?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
