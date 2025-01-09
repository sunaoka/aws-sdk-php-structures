<?php

namespace Sunaoka\Aws\Structures\MediaConnect\PurchaseOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OfferingArn
 * @property string $ReservationName
 * @property string $Start
 */
class PurchaseOfferingRequest extends Request
{
    /**
     * @param array{
     *     OfferingArn: string,
     *     ReservationName: string,
     *     Start: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
