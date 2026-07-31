<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 * @property string $serviceArn
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListTestRunEventsRequest extends Request
{
    /**
     * @param array{
     *     testRunId: string,
     *     serviceArn: string,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
