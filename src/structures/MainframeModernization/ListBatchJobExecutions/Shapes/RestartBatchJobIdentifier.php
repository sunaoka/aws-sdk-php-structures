<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionId
 * @property JobStepRestartMarker $jobStepRestartMarker
 */
class RestartBatchJobIdentifier extends Shape
{
    /**
     * @param array{
     *     executionId: string,
     *     jobStepRestartMarker: JobStepRestartMarker
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
