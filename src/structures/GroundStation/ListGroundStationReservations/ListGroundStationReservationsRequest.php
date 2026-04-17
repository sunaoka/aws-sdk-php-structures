<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListGroundStationReservations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $groundStationId
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property list<'MAINTENANCE'|'CONTACT'>|null $reservationTypes
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListGroundStationReservationsRequest extends Request
{
    /**
     * @param array{
     *     groundStationId: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     reservationTypes?: list<'MAINTENANCE'|'CONTACT'>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
