<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CompareDataSetsStepInput $stepInput
 * @property CompareDataSetsStepOutput $stepOutput
 */
class CompareDataSetsSummary extends Shape
{
    /**
     * @param array{
     *     stepInput: CompareDataSetsStepInput,
     *     stepOutput?: CompareDataSetsStepOutput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
