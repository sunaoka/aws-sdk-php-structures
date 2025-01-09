<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ActivatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property list<Shapes\ParameterValue> $parameterValues
 * @property \Aws\Api\DateTimeResult $startTimestamp
 */
class ActivatePipelineRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     parameterValues?: list<Shapes\ParameterValue>,
     *     startTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
