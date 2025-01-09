<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShipmentTrackingNumber
 * @property 'DHL'|'DBS'|'FEDEX'|'UPS'|'EXPEDITORS' $ShipmentCarrier
 */
class ShipmentInformation extends Shape
{
    /**
     * @param array{
     *     ShipmentTrackingNumber?: string,
     *     ShipmentCarrier?: 'DHL'|'DBS'|'FEDEX'|'UPS'|'EXPEDITORS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
