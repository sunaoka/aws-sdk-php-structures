<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceIdentifier
 * @property 'cluster'|'cluster-parameter-group'|'cluster-security-group'|'cluster-snapshot'|'scheduled-action' $SourceType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $Duration
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     SourceIdentifier?: string,
     *     SourceType?: 'cluster'|'cluster-parameter-group'|'cluster-security-group'|'cluster-snapshot'|'scheduled-action',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Duration?: int,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
