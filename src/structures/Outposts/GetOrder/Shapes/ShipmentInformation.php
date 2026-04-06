<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ShipmentTrackingNumber
 * @property 'DHL'|'DBS'|'FEDEX'|'UPS'|'EXPEDITORS'|null $ShipmentCarrier
 */
class ShipmentInformation extends Shape
{
    /**
     * @param array{
     *     ShipmentTrackingNumber?: string|null,
     *     ShipmentCarrier?: 'DHL'|'DBS'|'FEDEX'|'UPS'|'EXPEDITORS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
