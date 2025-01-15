<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property \Aws\Api\DateTimeResult|null $startTime
 */
class ListAppVersionsRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
