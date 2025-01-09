<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptCapacityReservationBillingOwnership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $CapacityReservationId
 */
class AcceptCapacityReservationBillingOwnershipRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     CapacityReservationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
