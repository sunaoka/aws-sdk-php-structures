<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TN3270StepInput $stepInput
 * @property TN3270StepOutput|null $stepOutput
 */
class TN3270Summary extends Shape
{
    /**
     * @param array{
     *     stepInput: TN3270StepInput,
     *     stepOutput?: TN3270StepOutput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
