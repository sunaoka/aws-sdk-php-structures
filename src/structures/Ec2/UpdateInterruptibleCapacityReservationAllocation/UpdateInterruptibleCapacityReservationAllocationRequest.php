<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateInterruptibleCapacityReservationAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property int|null $TargetInstanceCount
 * @property bool|null $DryRun
 * @property 'retain'|'default'|null $ZeroSizePreference
 */
class UpdateInterruptibleCapacityReservationAllocationRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
     *     TargetInstanceCount?: int|null,
     *     DryRun?: bool|null,
     *     ZeroSizePreference?: 'retain'|'default'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
