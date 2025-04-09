<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListEphemerides;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $satelliteId
 * @property \Aws\Api\DateTimeResult $startTime
 * @property list<'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'>|null $statusList
 */
class ListEphemeridesRequest extends Request
{
    /**
     * @param array{
     *     endTime: \Aws\Api\DateTimeResult,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     satelliteId: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     statusList?: list<'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
