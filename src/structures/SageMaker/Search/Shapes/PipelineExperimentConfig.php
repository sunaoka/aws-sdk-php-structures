<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExperimentName
 * @property string $TrialName
 */
class PipelineExperimentConfig extends Shape
{
    /**
     * @param array{
     *     ExperimentName?: string,
     *     TrialName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
