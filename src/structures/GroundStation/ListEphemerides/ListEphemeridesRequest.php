<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListEphemerides;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int<0, 100> $maxResults
 * @property string $nextToken
 * @property string $satelliteId
 * @property \Aws\Api\DateTimeResult $startTime
 * @property list<'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'> $statusList
 */
class ListEphemeridesRequest extends Request
{
    /**
     * @param array{
     *     endTime: \Aws\Api\DateTimeResult,
     *     maxResults?: int<0, 100>,
     *     nextToken?: string,
     *     satelliteId: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     statusList?: list<'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
