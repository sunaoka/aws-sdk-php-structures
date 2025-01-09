<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastSnapshotRestores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotId
 * @property string $AvailabilityZone
 * @property 'enabling'|'optimizing'|'enabled'|'disabling'|'disabled' $State
 * @property string $StateTransitionReason
 * @property string $OwnerId
 * @property string $OwnerAlias
 * @property \Aws\Api\DateTimeResult $EnablingTime
 * @property \Aws\Api\DateTimeResult $OptimizingTime
 * @property \Aws\Api\DateTimeResult $EnabledTime
 * @property \Aws\Api\DateTimeResult $DisablingTime
 * @property \Aws\Api\DateTimeResult $DisabledTime
 */
class DisableFastSnapshotRestoreSuccessItem extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string,
     *     AvailabilityZone?: string,
     *     State?: 'enabling'|'optimizing'|'enabled'|'disabling'|'disabled',
     *     StateTransitionReason?: string,
     *     OwnerId?: string,
     *     OwnerAlias?: string,
     *     EnablingTime?: \Aws\Api\DateTimeResult,
     *     OptimizingTime?: \Aws\Api\DateTimeResult,
     *     EnabledTime?: \Aws\Api\DateTimeResult,
     *     DisablingTime?: \Aws\Api\DateTimeResult,
     *     DisabledTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
