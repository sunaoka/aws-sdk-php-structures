<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateCapacityReservationBillingOwner;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $CapacityReservationId
 * @property string $UnusedReservationBillingOwnerId
 */
class AssociateCapacityReservationBillingOwnerRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     CapacityReservationId: string,
     *     UnusedReservationBillingOwnerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
