<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\SendHeartbeat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeploymentName
 * @property string $DeploymentStatus
 * @property string $DeploymentStatusMessage
 * @property \Aws\Api\DateTimeResult $DeploymentStartTime
 * @property \Aws\Api\DateTimeResult $DeploymentEndTime
 * @property list<DeploymentModel> $DeploymentModels
 */
class DeploymentResult extends Shape
{
    /**
     * @param array{
     *     DeploymentName?: string,
     *     DeploymentStatus?: string,
     *     DeploymentStatusMessage?: string,
     *     DeploymentStartTime?: \Aws\Api\DateTimeResult,
     *     DeploymentEndTime?: \Aws\Api\DateTimeResult,
     *     DeploymentModels?: list<DeploymentModel>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
