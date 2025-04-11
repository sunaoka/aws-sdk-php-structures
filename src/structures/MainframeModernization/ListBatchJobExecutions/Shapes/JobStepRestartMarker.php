<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fromProcStep
 * @property string $fromStep
 * @property bool|null $skip
 * @property int|null $stepCheckpoint
 * @property string|null $toProcStep
 * @property string|null $toStep
 */
class JobStepRestartMarker extends Shape
{
    /**
     * @param array{
     *     fromProcStep?: string|null,
     *     fromStep: string,
     *     skip?: bool|null,
     *     stepCheckpoint?: int|null,
     *     toProcStep?: string|null,
     *     toStep?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
