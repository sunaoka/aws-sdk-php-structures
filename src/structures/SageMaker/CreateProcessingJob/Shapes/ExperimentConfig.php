<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExperimentName
 * @property string|null $TrialName
 * @property string|null $TrialComponentDisplayName
 * @property string|null $RunName
 */
class ExperimentConfig extends Shape
{
    /**
     * @param array{
     *     ExperimentName?: string|null,
     *     TrialName?: string|null,
     *     TrialComponentDisplayName?: string|null,
     *     RunName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
