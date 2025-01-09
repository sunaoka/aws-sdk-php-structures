<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AllocationStrategy
 * @property string $ClientToken
 * @property list<Shapes\ReservationFleetInstanceSpecification> $InstanceTypeSpecifications
 * @property 'default' $Tenancy
 * @property int $TotalTargetCapacity
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property 'open' $InstanceMatchCriteria
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateCapacityReservationFleetRequest extends Request
{
    /**
     * @param array{
     *     AllocationStrategy?: string,
     *     ClientToken?: string,
     *     InstanceTypeSpecifications: list<Shapes\ReservationFleetInstanceSpecification>,
     *     Tenancy?: 'default',
     *     TotalTargetCapacity: int,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     InstanceMatchCriteria?: 'open',
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
