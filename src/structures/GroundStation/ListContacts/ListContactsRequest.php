<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string|null $groundStation
 * @property int<0, 100>|null $maxResults
 * @property string|null $missionProfileArn
 * @property string|null $nextToken
 * @property string|null $satelliteArn
 * @property \Aws\Api\DateTimeResult $startTime
 * @property list<'AVAILABLE'|'AWS_CANCELLED'|'AWS_FAILED'|'CANCELLED'|'CANCELLING'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE'|'PASS'|'POSTPASS'|'PREPASS'|'SCHEDULED'|'SCHEDULING'> $statusList
 */
class ListContactsRequest extends Request
{
    /**
     * @param array{
     *     endTime: \Aws\Api\DateTimeResult,
     *     groundStation?: string|null,
     *     maxResults?: int<0, 100>|null,
     *     missionProfileArn?: string|null,
     *     nextToken?: string|null,
     *     satelliteArn?: string|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     statusList: list<'AVAILABLE'|'AWS_CANCELLED'|'AWS_FAILED'|'CANCELLED'|'CANCELLING'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE'|'PASS'|'POSTPASS'|'PREPASS'|'SCHEDULED'|'SCHEDULING'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
