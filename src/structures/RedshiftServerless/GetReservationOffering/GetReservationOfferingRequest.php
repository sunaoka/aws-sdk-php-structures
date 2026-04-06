<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetReservationOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $offeringId
 */
class GetReservationOfferingRequest extends Request
{
    /**
     * @param array{offeringId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
