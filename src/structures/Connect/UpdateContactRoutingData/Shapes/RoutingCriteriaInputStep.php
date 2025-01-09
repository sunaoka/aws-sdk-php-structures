<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutingCriteriaInputStepExpiry $Expiry
 * @property Expression $Expression
 */
class RoutingCriteriaInputStep extends Shape
{
    /**
     * @param array{
     *     Expiry?: RoutingCriteriaInputStepExpiry,
     *     Expression?: Expression
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
