<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD' $ShippingOption
 * @property Shipment $InboundShipment
 * @property Shipment $OutboundShipment
 */
class ShippingDetails extends Shape
{
    /**
     * @param array{
     *     ShippingOption?: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD',
     *     InboundShipment?: Shipment,
     *     OutboundShipment?: Shipment
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
