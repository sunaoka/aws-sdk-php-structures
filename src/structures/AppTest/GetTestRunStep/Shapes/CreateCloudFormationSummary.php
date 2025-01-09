<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateCloudFormationStepInput $stepInput
 * @property CreateCloudFormationStepOutput $stepOutput
 */
class CreateCloudFormationSummary extends Shape
{
    /**
     * @param array{
     *     stepInput: CreateCloudFormationStepInput,
     *     stepOutput?: CreateCloudFormationStepOutput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
