<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobRestartPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $procStepName
 * @property int|null $procStepNumber
 * @property int|null $stepCheckpoint
 * @property string|null $stepCheckpointStatus
 * @property \Aws\Api\DateTimeResult|null $stepCheckpointTime
 * @property string|null $stepCondCode
 * @property string|null $stepName
 * @property int|null $stepNumber
 * @property bool|null $stepRestartable
 */
class JobStep extends Shape
{
    /**
     * @param array{
     *     procStepName?: string|null,
     *     procStepNumber?: int|null,
     *     stepCheckpoint?: int|null,
     *     stepCheckpointStatus?: string|null,
     *     stepCheckpointTime?: \Aws\Api\DateTimeResult|null,
     *     stepCondCode?: string|null,
     *     stepName?: string|null,
     *     stepNumber?: int|null,
     *     stepRestartable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
