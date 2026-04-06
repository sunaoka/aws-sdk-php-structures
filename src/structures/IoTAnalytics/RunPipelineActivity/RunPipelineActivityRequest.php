<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\RunPipelineActivity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PipelineActivity $pipelineActivity
 * @property list<string|resource|\Psr\Http\Message\StreamInterface> $payloads
 */
class RunPipelineActivityRequest extends Request
{
    /**
     * @param array{
     *     pipelineActivity: Shapes\PipelineActivity,
     *     payloads: list<string|resource|\Psr\Http\Message\StreamInterface>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
