<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CancelPipelineReprocessing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property string $reprocessingId
 */
class CancelPipelineReprocessingRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     reprocessingId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
