<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListStageDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEPLOY'|'UNDEPLOY'|null $DeploymentAction
 * @property string|null $DeploymentId
 * @property DeploymentResult|null $DeploymentResult
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $DeploymentState
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string|null $SnapshotId
 */
class StageDeploymentSummary extends Shape
{
    /**
     * @param array{
     *     DeploymentAction?: 'DEPLOY'|'UNDEPLOY'|null,
     *     DeploymentId?: string|null,
     *     DeploymentResult?: DeploymentResult|null,
     *     DeploymentState?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     SnapshotId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
