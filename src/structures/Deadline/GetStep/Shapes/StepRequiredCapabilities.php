<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StepAttributeCapability> $attributes
 * @property list<StepAmountCapability> $amounts
 */
class StepRequiredCapabilities extends Shape
{
    /**
     * @param array{
     *     attributes: list<StepAttributeCapability>,
     *     amounts: list<StepAmountCapability>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
