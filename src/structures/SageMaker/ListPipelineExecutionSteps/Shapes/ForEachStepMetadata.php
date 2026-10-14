<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Succeeded'|'Failed'|'Stopped'|null $Status
 * @property int|null $InputItemCount
 * @property int|null $TotalStepCount
 * @property int|null $SucceededStepCount
 * @property int|null $FailedStepCount
 * @property int|null $StoppedStepCount
 * @property ForEachSelectorResult|null $Selector
 */
class ForEachStepMetadata extends Shape
{
    /**
     * @param array{
     *     Status?: 'Succeeded'|'Failed'|'Stopped'|null,
     *     InputItemCount?: int|null,
     *     TotalStepCount?: int|null,
     *     SucceededStepCount?: int|null,
     *     FailedStepCount?: int|null,
     *     StoppedStepCount?: int|null,
     *     Selector?: ForEachSelectorResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
