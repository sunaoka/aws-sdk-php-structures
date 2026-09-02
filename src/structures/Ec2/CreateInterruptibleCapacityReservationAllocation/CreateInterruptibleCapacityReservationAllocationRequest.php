<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInterruptibleCapacityReservationAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property int $InstanceCount
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'retain'|'default'|null $ZeroSizePreference
 */
class CreateInterruptibleCapacityReservationAllocationRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
     *     InstanceCount: int,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ZeroSizePreference?: 'retain'|'default'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
