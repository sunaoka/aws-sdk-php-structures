<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeleteCloudFormationStepInput $stepInput
 * @property DeleteCloudFormationStepOutput $stepOutput
 */
class DeleteCloudFormationSummary extends Shape
{
    /**
     * @param array{
     *     stepInput: DeleteCloudFormationStepInput,
     *     stepOutput?: DeleteCloudFormationStepOutput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
