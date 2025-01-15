<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentManagedActionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActionId
 * @property 'InstanceRefresh'|'PlatformUpdate'|'Unknown'|null $ActionType
 * @property string|null $ActionDescription
 * @property 'UpdateCancelled'|'CancellationFailed'|'RollbackFailed'|'RollbackSuccessful'|'InternalFailure'|'InvalidEnvironmentState'|'PermissionsError'|null $FailureType
 * @property 'Completed'|'Failed'|'Unknown'|null $Status
 * @property string|null $FailureDescription
 * @property \Aws\Api\DateTimeResult|null $ExecutedTime
 * @property \Aws\Api\DateTimeResult|null $FinishedTime
 */
class ManagedActionHistoryItem extends Shape
{
    /**
     * @param array{
     *     ActionId?: string|null,
     *     ActionType?: 'InstanceRefresh'|'PlatformUpdate'|'Unknown'|null,
     *     ActionDescription?: string|null,
     *     FailureType?: 'UpdateCancelled'|'CancellationFailed'|'RollbackFailed'|'RollbackSuccessful'|'InternalFailure'|'InvalidEnvironmentState'|'PermissionsError'|null,
     *     Status?: 'Completed'|'Failed'|'Unknown'|null,
     *     FailureDescription?: string|null,
     *     ExecutedTime?: \Aws\Api\DateTimeResult|null,
     *     FinishedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
