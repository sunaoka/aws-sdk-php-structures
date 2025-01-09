<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $TargetDpus
 * @property string $Name
 */
class UpdateCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     TargetDpus: int,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
