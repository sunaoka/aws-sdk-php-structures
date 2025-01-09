<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListEffectiveDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentId
 * @property string $deploymentName
 * @property string $iotJobId
 * @property string $iotJobArn
 * @property string $description
 * @property string $targetArn
 * @property 'IN_PROGRESS'|'QUEUED'|'FAILED'|'COMPLETED'|'TIMED_OUT'|'CANCELED'|'REJECTED'|'SUCCEEDED' $coreDeviceExecutionStatus
 * @property string $reason
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property \Aws\Api\DateTimeResult $modifiedTimestamp
 * @property EffectiveDeploymentStatusDetails $statusDetails
 */
class EffectiveDeployment extends Shape
{
    /**
     * @param array{
     *     deploymentId: string,
     *     deploymentName: string,
     *     iotJobId?: string,
     *     iotJobArn?: string,
     *     description?: string,
     *     targetArn: string,
     *     coreDeviceExecutionStatus: 'IN_PROGRESS'|'QUEUED'|'FAILED'|'COMPLETED'|'TIMED_OUT'|'CANCELED'|'REJECTED'|'SUCCEEDED',
     *     reason?: string,
     *     creationTimestamp: \Aws\Api\DateTimeResult,
     *     modifiedTimestamp: \Aws\Api\DateTimeResult,
     *     statusDetails?: EffectiveDeploymentStatusDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
