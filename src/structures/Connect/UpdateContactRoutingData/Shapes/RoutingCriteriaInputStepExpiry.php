<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DurationInSeconds
 */
class RoutingCriteriaInputStepExpiry extends Shape
{
    /**
     * @param array{DurationInSeconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
