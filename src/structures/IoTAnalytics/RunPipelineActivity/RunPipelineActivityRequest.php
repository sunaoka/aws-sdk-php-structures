<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\RunPipelineActivity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PipelineActivity $pipelineActivity
 * @property list<string> $payloads
 */
class RunPipelineActivityRequest extends Request
{
    /**
     * @param array{
     *     pipelineActivity: Shapes\PipelineActivity,
     *     payloads: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
