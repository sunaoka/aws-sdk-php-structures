<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property Shapes\RenewalSettings|null $RenewalSettings
 * @property string $ReservationId
 */
class UpdateReservationRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     RenewalSettings?: Shapes\RenewalSettings|null,
     *     ReservationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
