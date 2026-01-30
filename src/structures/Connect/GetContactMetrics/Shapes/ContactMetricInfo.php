<?php

namespace Sunaoka\Aws\Structures\Connect\GetContactMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ESTIMATED_WAIT_TIME'|'POSITION_IN_QUEUE' $Name
 */
class ContactMetricInfo extends Shape
{
    /**
     * @param array{Name: 'ESTIMATED_WAIT_TIME'|'POSITION_IN_QUEUE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
