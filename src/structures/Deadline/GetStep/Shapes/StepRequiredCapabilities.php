<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StepAmountCapability> $amounts
 * @property list<StepAttributeCapability> $attributes
 */
class StepRequiredCapabilities extends Shape
{
    /**
     * @param array{
     *     amounts: list<StepAmountCapability>,
     *     attributes: list<StepAttributeCapability>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
