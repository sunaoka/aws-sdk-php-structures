<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StepParameter> $parameters
 * @property string|null $combination
 */
class ParameterSpace extends Shape
{
    /**
     * @param array{
     *     parameters: list<StepParameter>,
     *     combination?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
