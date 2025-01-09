<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\RenewalSettings $RenewalSettings
 * @property string $ReservationId
 */
class UpdateReservationRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     RenewalSettings?: Shapes\RenewalSettings,
     *     ReservationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
