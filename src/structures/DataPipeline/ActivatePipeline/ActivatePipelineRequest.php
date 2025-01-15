<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ActivatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property list<Shapes\ParameterValue>|null $parameterValues
 * @property \Aws\Api\DateTimeResult|null $startTimestamp
 */
class ActivatePipelineRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     parameterValues?: list<Shapes\ParameterValue>|null,
     *     startTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
