<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlowExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 * @property string $flowName
 * @property string $executionId
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'FAILED'|null $status
 * @property DataIntegrationFlowExecutionSourceInfo|null $sourceInfo
 * @property string|null $message
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property DataIntegrationFlowExecutionOutputMetadata|null $outputMetadata
 */
class DataIntegrationFlowExecution extends Shape
{
    /**
     * @param array{
     *     instanceId: string,
     *     flowName: string,
     *     executionId: string,
     *     status?: 'SUCCEEDED'|'IN_PROGRESS'|'FAILED'|null,
     *     sourceInfo?: DataIntegrationFlowExecutionSourceInfo|null,
     *     message?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     outputMetadata?: DataIntegrationFlowExecutionOutputMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
