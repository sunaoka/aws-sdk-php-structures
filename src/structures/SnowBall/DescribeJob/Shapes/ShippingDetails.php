<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null $ShippingOption
 * @property Shipment|null $InboundShipment
 * @property Shipment|null $OutboundShipment
 */
class ShippingDetails extends Shape
{
    /**
     * @param array{
     *     ShippingOption?: 'SECOND_DAY'|'NEXT_DAY'|'EXPRESS'|'STANDARD'|null,
     *     InboundShipment?: Shipment|null,
     *     OutboundShipment?: Shipment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
