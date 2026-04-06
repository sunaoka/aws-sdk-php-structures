<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListEphemerides;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $satelliteId
 * @property 'TLE'|'OEM'|'AZ_EL'|'SERVICE_MANAGED'|null $ephemerisType
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property list<'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'>|null $statusList
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListEphemeridesRequest extends Request
{
    /**
     * @param array{
     *     satelliteId?: string|null,
     *     ephemerisType?: 'TLE'|'OEM'|'AZ_EL'|'SERVICE_MANAGED'|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     statusList?: list<'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
