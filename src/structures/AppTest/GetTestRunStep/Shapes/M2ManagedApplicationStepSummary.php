<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property M2ManagedApplicationStepInput $stepInput
 * @property M2ManagedApplicationStepOutput $stepOutput
 */
class M2ManagedApplicationStepSummary extends Shape
{
    /**
     * @param array{
     *     stepInput: M2ManagedApplicationStepInput,
     *     stepOutput?: M2ManagedApplicationStepOutput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
