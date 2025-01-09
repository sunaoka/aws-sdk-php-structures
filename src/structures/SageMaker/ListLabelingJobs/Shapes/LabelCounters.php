<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalLabeled
 * @property int $HumanLabeled
 * @property int $MachineLabeled
 * @property int $FailedNonRetryableError
 * @property int $Unlabeled
 */
class LabelCounters extends Shape
{
    /**
     * @param array{
     *     TotalLabeled?: int,
     *     HumanLabeled?: int,
     *     MachineLabeled?: int,
     *     FailedNonRetryableError?: int,
     *     Unlabeled?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
