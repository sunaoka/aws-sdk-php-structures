<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $capacity
 * @property string|null $clientToken
 * @property string $offeringId
 */
class CreateReservationRequest extends Request
{
    /**
     * @param array{
     *     capacity: int,
     *     clientToken?: string|null,
     *     offeringId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
