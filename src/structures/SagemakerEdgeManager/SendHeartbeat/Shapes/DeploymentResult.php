<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\SendHeartbeat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeploymentName
 * @property string|null $DeploymentStatus
 * @property string|null $DeploymentStatusMessage
 * @property \Aws\Api\DateTimeResult|null $DeploymentStartTime
 * @property \Aws\Api\DateTimeResult|null $DeploymentEndTime
 * @property list<DeploymentModel>|null $DeploymentModels
 */
class DeploymentResult extends Shape
{
    /**
     * @param array{
     *     DeploymentName?: string|null,
     *     DeploymentStatus?: string|null,
     *     DeploymentStatusMessage?: string|null,
     *     DeploymentStartTime?: \Aws\Api\DateTimeResult|null,
     *     DeploymentEndTime?: \Aws\Api\DateTimeResult|null,
     *     DeploymentModels?: list<DeploymentModel>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
