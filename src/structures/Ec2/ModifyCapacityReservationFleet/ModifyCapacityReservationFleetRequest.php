<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyCapacityReservationFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationFleetId
 * @property int|null $TotalTargetCapacity
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property bool|null $DryRun
 * @property bool|null $RemoveEndDate
 */
class ModifyCapacityReservationFleetRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationFleetId: string,
     *     TotalTargetCapacity?: int|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     DryRun?: bool|null,
     *     RemoveEndDate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
