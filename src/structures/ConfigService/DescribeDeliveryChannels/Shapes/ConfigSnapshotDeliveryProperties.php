<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours' $deliveryFrequency
 */
class ConfigSnapshotDeliveryProperties extends Shape
{
    /**
     * @param array{deliveryFrequency?: 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
