<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $TotalLabeled
 * @property int<0, max> $HumanLabeled
 * @property int<0, max> $MachineLabeled
 * @property int<0, max> $FailedNonRetryableError
 * @property int<0, max> $Unlabeled
 */
class LabelCounters extends Shape
{
    /**
     * @param array{
     *     TotalLabeled?: int<0, max>,
     *     HumanLabeled?: int<0, max>,
     *     MachineLabeled?: int<0, max>,
     *     FailedNonRetryableError?: int<0, max>,
     *     Unlabeled?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
