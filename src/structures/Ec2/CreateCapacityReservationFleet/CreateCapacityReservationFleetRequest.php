<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AllocationStrategy
 * @property string|null $ClientToken
 * @property list<Shapes\ReservationFleetInstanceSpecification> $InstanceTypeSpecifications
 * @property 'default'|null $Tenancy
 * @property int $TotalTargetCapacity
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property 'open'|null $InstanceMatchCriteria
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateCapacityReservationFleetRequest extends Request
{
    /**
     * @param array{
     *     AllocationStrategy?: string|null,
     *     ClientToken?: string|null,
     *     InstanceTypeSpecifications: list<Shapes\ReservationFleetInstanceSpecification>,
     *     Tenancy?: 'default'|null,
     *     TotalTargetCapacity: int,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     InstanceMatchCriteria?: 'open'|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
