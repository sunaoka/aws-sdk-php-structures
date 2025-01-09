<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExperimentName
 * @property string $TrialName
 * @property string $TrialComponentDisplayName
 * @property string $RunName
 */
class ExperimentConfig extends Shape
{
    /**
     * @param array{
     *     ExperimentName?: string,
     *     TrialName?: string,
     *     TrialComponentDisplayName?: string,
     *     RunName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
