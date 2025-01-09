<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property M2NonManagedApplicationStepInput $stepInput
 * @property M2NonManagedApplicationStepOutput $stepOutput
 */
class M2NonManagedApplicationStepSummary extends Shape
{
    /**
     * @param array{
     *     stepInput: M2NonManagedApplicationStepInput,
     *     stepOutput?: M2NonManagedApplicationStepOutput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
