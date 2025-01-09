<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListTimelineEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $filters
 * @property string $incidentRecordArn
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property 'EVENT_TIME' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 */
class ListTimelineEventsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\Filter>,
     *     incidentRecordArn: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     sortBy?: 'EVENT_TIME',
     *     sortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
