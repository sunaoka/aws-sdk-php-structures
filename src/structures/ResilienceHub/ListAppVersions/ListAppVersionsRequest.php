<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property \Aws\Api\DateTimeResult $startTime
 */
class ListAppVersionsRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     startTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
