<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\SendHeartbeat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelHandle
 * @property string|null $ModelName
 * @property string|null $ModelVersion
 * @property 'DEPLOY'|'UNDEPLOY'|null $DesiredState
 * @property 'DEPLOY'|'UNDEPLOY'|null $State
 * @property 'SUCCESS'|'FAIL'|null $Status
 * @property string|null $StatusReason
 * @property string|null $RollbackFailureReason
 */
class DeploymentModel extends Shape
{
    /**
     * @param array{
     *     ModelHandle?: string|null,
     *     ModelName?: string|null,
     *     ModelVersion?: string|null,
     *     DesiredState?: 'DEPLOY'|'UNDEPLOY'|null,
     *     State?: 'DEPLOY'|'UNDEPLOY'|null,
     *     Status?: 'SUCCESS'|'FAIL'|null,
     *     StatusReason?: string|null,
     *     RollbackFailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
