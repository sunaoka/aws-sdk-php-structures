<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgeDeploymentPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'READYTODEPLOY'|'STARTING'|'INPROGRESS'|'DEPLOYED'|'FAILED'|'STOPPING'|'STOPPED' $StageStatus
 * @property int $EdgeDeploymentSuccessInStage
 * @property int $EdgeDeploymentPendingInStage
 * @property int $EdgeDeploymentFailedInStage
 * @property string $EdgeDeploymentStatusMessage
 * @property \Aws\Api\DateTimeResult $EdgeDeploymentStageStartTime
 */
class EdgeDeploymentStatus extends Shape
{
    /**
     * @param array{
     *     StageStatus: 'CREATING'|'READYTODEPLOY'|'STARTING'|'INPROGRESS'|'DEPLOYED'|'FAILED'|'STOPPING'|'STOPPED',
     *     EdgeDeploymentSuccessInStage: int,
     *     EdgeDeploymentPendingInStage: int,
     *     EdgeDeploymentFailedInStage: int,
     *     EdgeDeploymentStatusMessage?: string,
     *     EdgeDeploymentStageStartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
