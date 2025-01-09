<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FleetAmountCapability> $amounts
 * @property list<FleetAttributeCapability> $attributes
 */
class FleetCapabilities extends Shape
{
    /**
     * @param array{
     *     amounts?: list<FleetAmountCapability>,
     *     attributes?: list<FleetAttributeCapability>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
