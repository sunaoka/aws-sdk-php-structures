<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutingCriteriaInputStepExpiry|null $Expiry
 * @property Expression|null $Expression
 */
class RoutingCriteriaInputStep extends Shape
{
    /**
     * @param array{
     *     Expiry?: RoutingCriteriaInputStepExpiry|null,
     *     Expression?: Expression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
