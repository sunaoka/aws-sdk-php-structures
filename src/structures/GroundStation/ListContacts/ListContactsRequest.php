<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<'SCHEDULING'|'FAILED_TO_SCHEDULE'|'SCHEDULED'|'CANCELLED'|'AWS_CANCELLED'|'PREPASS'|'PASS'|'POSTPASS'|'COMPLETED'|'FAILED'|'AVAILABLE'|'CANCELLING'|'AWS_FAILED'> $statusList
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string|null $groundStation
 * @property string|null $satelliteArn
 * @property string|null $missionProfileArn
 * @property Shapes\EphemerisFilter|null $ephemeris
 */
class ListContactsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     statusList: list<'SCHEDULING'|'FAILED_TO_SCHEDULE'|'SCHEDULED'|'CANCELLED'|'AWS_CANCELLED'|'PREPASS'|'PASS'|'POSTPASS'|'COMPLETED'|'FAILED'|'AVAILABLE'|'CANCELLING'|'AWS_FAILED'>,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     groundStation?: string|null,
     *     satelliteArn?: string|null,
     *     missionProfileArn?: string|null,
     *     ephemeris?: Shapes\EphemerisFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
