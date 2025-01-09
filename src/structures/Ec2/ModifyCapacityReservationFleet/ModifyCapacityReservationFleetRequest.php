<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyCapacityReservationFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationFleetId
 * @property int $TotalTargetCapacity
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property bool $DryRun
 * @property bool $RemoveEndDate
 */
class ModifyCapacityReservationFleetRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationFleetId: string,
     *     TotalTargetCapacity?: int,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     DryRun?: bool,
     *     RemoveEndDate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
