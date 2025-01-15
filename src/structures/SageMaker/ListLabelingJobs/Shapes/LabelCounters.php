<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $TotalLabeled
 * @property int<0, max>|null $HumanLabeled
 * @property int<0, max>|null $MachineLabeled
 * @property int<0, max>|null $FailedNonRetryableError
 * @property int<0, max>|null $Unlabeled
 */
class LabelCounters extends Shape
{
    /**
     * @param array{
     *     TotalLabeled?: int<0, max>|null,
     *     HumanLabeled?: int<0, max>|null,
     *     MachineLabeled?: int<0, max>|null,
     *     FailedNonRetryableError?: int<0, max>|null,
     *     Unlabeled?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
