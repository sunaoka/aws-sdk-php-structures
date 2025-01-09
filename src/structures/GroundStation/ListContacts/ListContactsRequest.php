<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $groundStation
 * @property int<0, 100> $maxResults
 * @property string $missionProfileArn
 * @property string $nextToken
 * @property string $satelliteArn
 * @property \Aws\Api\DateTimeResult $startTime
 * @property list<'AVAILABLE'|'AWS_CANCELLED'|'AWS_FAILED'|'CANCELLED'|'CANCELLING'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE'|'PASS'|'POSTPASS'|'PREPASS'|'SCHEDULED'|'SCHEDULING'> $statusList
 */
class ListContactsRequest extends Request
{
    /**
     * @param array{
     *     endTime: \Aws\Api\DateTimeResult,
     *     groundStation?: string,
     *     maxResults?: int<0, 100>,
     *     missionProfileArn?: string,
     *     nextToken?: string,
     *     satelliteArn?: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     statusList: list<'AVAILABLE'|'AWS_CANCELLED'|'AWS_FAILED'|'CANCELLED'|'CANCELLING'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE'|'PASS'|'POSTPASS'|'PREPASS'|'SCHEDULED'|'SCHEDULING'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
