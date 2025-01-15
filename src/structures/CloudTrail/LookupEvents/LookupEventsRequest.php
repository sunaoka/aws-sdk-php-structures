<?php

namespace Sunaoka\Aws\Structures\CloudTrail\LookupEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\LookupAttribute>|null $LookupAttributes
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'insight'|null $EventCategory
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class LookupEventsRequest extends Request
{
    /**
     * @param array{
     *     LookupAttributes?: list<Shapes\LookupAttribute>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     EventCategory?: 'insight'|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
