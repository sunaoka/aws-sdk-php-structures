<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\SendHeartbeat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelHandle
 * @property string $ModelName
 * @property string $ModelVersion
 * @property 'DEPLOY'|'UNDEPLOY' $DesiredState
 * @property 'DEPLOY'|'UNDEPLOY' $State
 * @property 'SUCCESS'|'FAIL' $Status
 * @property string $StatusReason
 * @property string $RollbackFailureReason
 */
class DeploymentModel extends Shape
{
    /**
     * @param array{
     *     ModelHandle?: string,
     *     ModelName?: string,
     *     ModelVersion?: string,
     *     DesiredState?: 'DEPLOY'|'UNDEPLOY',
     *     State?: 'DEPLOY'|'UNDEPLOY',
     *     Status?: 'SUCCESS'|'FAIL',
     *     StatusReason?: string,
     *     RollbackFailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
