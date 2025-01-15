<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservationFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string> $CapacityReservationFleetIds
 */
class CancelCapacityReservationFleetsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     CapacityReservationFleetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
