<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property bool|null $DryRun
 * @property 'commitment-wind-down'|null $ApplyCancellationCharges
 * @property string|null $QuoteId
 */
class CancelCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
     *     DryRun?: bool|null,
     *     ApplyCancellationCharges?: 'commitment-wind-down'|null,
     *     QuoteId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
