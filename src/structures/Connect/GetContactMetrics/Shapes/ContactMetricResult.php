<?php

namespace Sunaoka\Aws\Structures\Connect\GetContactMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ESTIMATED_WAIT_TIME'|'POSITION_IN_QUEUE' $Name
 * @property ContactMetricValue $Value
 */
class ContactMetricResult extends Shape
{
    /**
     * @param array{
     *     Name: 'ESTIMATED_WAIT_TIME'|'POSITION_IN_QUEUE',
     *     Value: ContactMetricValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
