<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEventSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AutomationEventFilter>|null $filters
 * @property string|null $startDateInclusive
 * @property string|null $endDateExclusive
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAutomationEventSummariesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\AutomationEventFilter>|null,
     *     startDateInclusive?: string|null,
     *     endDateExclusive?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
