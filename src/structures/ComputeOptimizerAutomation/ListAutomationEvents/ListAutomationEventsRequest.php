<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AutomationEventFilter>|null $filters
 * @property \Aws\Api\DateTimeResult|null $startTimeInclusive
 * @property \Aws\Api\DateTimeResult|null $endTimeExclusive
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAutomationEventsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\AutomationEventFilter>|null,
     *     startTimeInclusive?: \Aws\Api\DateTimeResult|null,
     *     endTimeExclusive?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
