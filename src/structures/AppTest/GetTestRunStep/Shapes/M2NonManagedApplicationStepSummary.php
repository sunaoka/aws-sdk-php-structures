<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property M2NonManagedApplicationStepInput $stepInput
 * @property M2NonManagedApplicationStepOutput|null $stepOutput
 */
class M2NonManagedApplicationStepSummary extends Shape
{
    /**
     * @param array{
     *     stepInput: M2NonManagedApplicationStepInput,
     *     stepOutput?: M2NonManagedApplicationStepOutput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
