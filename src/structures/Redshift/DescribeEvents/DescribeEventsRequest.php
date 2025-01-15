<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceIdentifier
 * @property 'cluster'|'cluster-parameter-group'|'cluster-security-group'|'cluster-snapshot'|'scheduled-action'|null $SourceType
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int|null $Duration
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     SourceIdentifier?: string|null,
     *     SourceType?: 'cluster'|'cluster-parameter-group'|'cluster-security-group'|'cluster-snapshot'|'scheduled-action'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Duration?: int|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
