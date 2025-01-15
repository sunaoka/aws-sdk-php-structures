<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExperimentName
 * @property string|null $TrialName
 */
class PipelineExperimentConfig extends Shape
{
    /**
     * @param array{
     *     ExperimentName?: string|null,
     *     TrialName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
