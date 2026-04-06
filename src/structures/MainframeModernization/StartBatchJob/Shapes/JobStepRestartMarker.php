<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\StartBatchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fromProcStep
 * @property string $fromStep
 * @property string|null $toProcStep
 * @property string|null $toStep
 */
class JobStepRestartMarker extends Shape
{
    /**
     * @param array{
     *     fromProcStep?: string|null,
     *     fromStep: string,
     *     toProcStep?: string|null,
     *     toStep?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
