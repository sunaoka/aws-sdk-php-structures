<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListEffectiveDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentId
 * @property string $deploymentName
 * @property string|null $iotJobId
 * @property string|null $iotJobArn
 * @property string|null $description
 * @property string $targetArn
 * @property 'IN_PROGRESS'|'QUEUED'|'FAILED'|'COMPLETED'|'TIMED_OUT'|'CANCELED'|'REJECTED'|'SUCCEEDED' $coreDeviceExecutionStatus
 * @property string|null $reason
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property \Aws\Api\DateTimeResult $modifiedTimestamp
 * @property EffectiveDeploymentStatusDetails|null $statusDetails
 */
class EffectiveDeployment extends Shape
{
    /**
     * @param array{
     *     deploymentId: string,
     *     deploymentName: string,
     *     iotJobId?: string|null,
     *     iotJobArn?: string|null,
     *     description?: string|null,
     *     targetArn: string,
     *     coreDeviceExecutionStatus: 'IN_PROGRESS'|'QUEUED'|'FAILED'|'COMPLETED'|'TIMED_OUT'|'CANCELED'|'REJECTED'|'SUCCEEDED',
     *     reason?: string|null,
     *     creationTimestamp: \Aws\Api\DateTimeResult,
     *     modifiedTimestamp: \Aws\Api\DateTimeResult,
     *     statusDetails?: EffectiveDeploymentStatusDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
