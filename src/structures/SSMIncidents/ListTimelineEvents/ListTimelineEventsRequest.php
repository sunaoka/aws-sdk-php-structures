<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListTimelineEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $filters
 * @property string $incidentRecordArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'EVENT_TIME'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 */
class ListTimelineEventsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\Filter>|null,
     *     incidentRecordArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     sortBy?: 'EVENT_TIME'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
