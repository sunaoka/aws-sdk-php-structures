<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fromProcStep
 * @property string $fromStep
 * @property string $toProcStep
 * @property string $toStep
 */
class JobStepRestartMarker extends Shape
{
    /**
     * @param array{
     *     fromProcStep?: string,
     *     fromStep: string,
     *     toProcStep?: string,
     *     toStep?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
