<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutDeliveryChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'|null $deliveryFrequency
 */
class ConfigSnapshotDeliveryProperties extends Shape
{
    /**
     * @param array{deliveryFrequency?: 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
