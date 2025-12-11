<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListEntityEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $Entity
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int<1, 250>|null $MaxResults
 * @property string|null $NextToken
 */
class ListEntityEventsRequest extends Request
{
    /**
     * @param array{
     *     Entity: array<string, string>,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     MaxResults?: int<1, 250>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
