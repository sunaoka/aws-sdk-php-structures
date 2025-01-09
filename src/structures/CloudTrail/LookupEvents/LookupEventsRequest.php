<?php

namespace Sunaoka\Aws\Structures\CloudTrail\LookupEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\LookupAttribute> $LookupAttributes
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'insight' $EventCategory
 * @property int $MaxResults
 * @property string $NextToken
 */
class LookupEventsRequest extends Request
{
    /**
     * @param array{
     *     LookupAttributes?: list<Shapes\LookupAttribute>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     EventCategory?: 'insight',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
