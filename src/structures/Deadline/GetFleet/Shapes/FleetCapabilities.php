<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FleetAmountCapability>|null $amounts
 * @property list<FleetAttributeCapability>|null $attributes
 */
class FleetCapabilities extends Shape
{
    /**
     * @param array{
     *     amounts?: list<FleetAmountCapability>|null,
     *     attributes?: list<FleetAttributeCapability>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
