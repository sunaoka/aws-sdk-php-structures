<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBCapacityReservationIdentifier
 * @property int|null $CapacityPerAvailabilityZone
 * @property 'unlimited'|'limited'|null $EndDateType
 * @property \Aws\Api\DateTimeResult|null $EndDate
 */
class ModifyDBCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     DBCapacityReservationIdentifier: string,
     *     CapacityPerAvailabilityZone?: int|null,
     *     EndDateType?: 'unlimited'|'limited'|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
