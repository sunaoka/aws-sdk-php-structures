<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateInterruptibleCapacityReservationAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property int $TargetInstanceCount
 * @property bool|null $DryRun
 */
class UpdateInterruptibleCapacityReservationAllocationRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
     *     TargetInstanceCount: int,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
