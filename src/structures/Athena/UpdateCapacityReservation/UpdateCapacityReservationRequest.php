<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<4, max> $TargetDpus
 * @property string $Name
 */
class UpdateCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     TargetDpus: int<4, max>,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
