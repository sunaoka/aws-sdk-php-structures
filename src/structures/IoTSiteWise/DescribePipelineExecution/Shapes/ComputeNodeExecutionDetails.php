<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $computeNodeName
 * @property string $taskName
 * @property string $taskArn
 * @property string $taskVersion
 * @property list<string> $dependsOn
 * @property ComputeNodeExecutionStatus $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property array<string, string>|null $executionEnvironmentVariables
 */
class ComputeNodeExecutionDetails extends Shape
{
    /**
     * @param array{
     *     computeNodeName: string,
     *     taskName: string,
     *     taskArn: string,
     *     taskVersion: string,
     *     dependsOn: list<string>,
     *     status: ComputeNodeExecutionStatus,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     executionEnvironmentVariables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
