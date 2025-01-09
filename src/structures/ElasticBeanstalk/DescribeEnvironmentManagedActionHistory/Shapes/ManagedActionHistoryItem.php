<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentManagedActionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionId
 * @property 'InstanceRefresh'|'PlatformUpdate'|'Unknown' $ActionType
 * @property string $ActionDescription
 * @property 'UpdateCancelled'|'CancellationFailed'|'RollbackFailed'|'RollbackSuccessful'|'InternalFailure'|'InvalidEnvironmentState'|'PermissionsError' $FailureType
 * @property 'Completed'|'Failed'|'Unknown' $Status
 * @property string $FailureDescription
 * @property \Aws\Api\DateTimeResult $ExecutedTime
 * @property \Aws\Api\DateTimeResult $FinishedTime
 */
class ManagedActionHistoryItem extends Shape
{
    /**
     * @param array{
     *     ActionId?: string,
     *     ActionType?: 'InstanceRefresh'|'PlatformUpdate'|'Unknown',
     *     ActionDescription?: string,
     *     FailureType?: 'UpdateCancelled'|'CancellationFailed'|'RollbackFailed'|'RollbackSuccessful'|'InternalFailure'|'InvalidEnvironmentState'|'PermissionsError',
     *     Status?: 'Completed'|'Failed'|'Unknown',
     *     FailureDescription?: string,
     *     ExecutedTime?: \Aws\Api\DateTimeResult,
     *     FinishedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
