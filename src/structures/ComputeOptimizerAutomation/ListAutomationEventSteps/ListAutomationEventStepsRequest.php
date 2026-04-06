<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEventSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAutomationEventStepsRequest extends Request
{
    /**
     * @param array{
     *     eventId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
