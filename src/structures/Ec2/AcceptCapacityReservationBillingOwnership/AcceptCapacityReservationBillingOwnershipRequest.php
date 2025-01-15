<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptCapacityReservationBillingOwnership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $CapacityReservationId
 */
class AcceptCapacityReservationBillingOwnershipRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     CapacityReservationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
