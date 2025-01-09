<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property bool $DryRun
 */
class CancelCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
