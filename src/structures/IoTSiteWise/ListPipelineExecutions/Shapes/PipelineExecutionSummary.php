<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineExecutionId
 * @property string $pipelineVersion
 * @property PipelineExecutionStatus $status
 * @property int<0, 2>|null $executionPriority
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class PipelineExecutionSummary extends Shape
{
    /**
     * @param array{
     *     pipelineExecutionId: string,
     *     pipelineVersion: string,
     *     status: PipelineExecutionStatus,
     *     executionPriority?: int<0, 2>|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
