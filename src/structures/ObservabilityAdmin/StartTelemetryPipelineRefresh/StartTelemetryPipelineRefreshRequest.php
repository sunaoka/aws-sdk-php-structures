<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartTelemetryPipelineRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineIdentifier
 */
class StartTelemetryPipelineRefreshRequest extends Request
{
    /**
     * @param array{PipelineIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
