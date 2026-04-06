<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $combination
 * @property list<StepParameter> $parameters
 */
class ParameterSpace extends Shape
{
    /**
     * @param array{
     *     combination?: string|null,
     *     parameters: list<StepParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
