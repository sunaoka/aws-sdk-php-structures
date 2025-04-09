<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string|null $groundStation
 * @property int<1, 100>|null $maxResults
 * @property string|null $missionProfileArn
 * @property string|null $nextToken
 * @property string|null $satelliteArn
 * @property \Aws\Api\DateTimeResult $startTime
 * @property list<'SCHEDULING'|'FAILED_TO_SCHEDULE'|'SCHEDULED'|'CANCELLED'|'AWS_CANCELLED'|'PREPASS'|'PASS'|'POSTPASS'|'COMPLETED'|'FAILED'|'AVAILABLE'|'CANCELLING'|'AWS_FAILED'> $statusList
 */
class ListContactsRequest extends Request
{
    /**
     * @param array{
     *     endTime: \Aws\Api\DateTimeResult,
     *     groundStation?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     missionProfileArn?: string|null,
     *     nextToken?: string|null,
     *     satelliteArn?: string|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     statusList: list<'SCHEDULING'|'FAILED_TO_SCHEDULE'|'SCHEDULED'|'CANCELLED'|'AWS_CANCELLED'|'PREPASS'|'PASS'|'POSTPASS'|'COMPLETED'|'FAILED'|'AVAILABLE'|'CANCELLING'|'AWS_FAILED'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
