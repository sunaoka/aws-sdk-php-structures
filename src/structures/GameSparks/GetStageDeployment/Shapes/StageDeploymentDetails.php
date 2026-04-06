<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetStageDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property 'DEPLOY'|'UNDEPLOY'|null $DeploymentAction
 * @property string|null $DeploymentId
 * @property DeploymentResult|null $DeploymentResult
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $DeploymentState
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string|null $SnapshotId
 */
class StageDeploymentDetails extends Shape
{
    /**
     * @param array{
     *     Created?: \Aws\Api\DateTimeResult|null,
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
