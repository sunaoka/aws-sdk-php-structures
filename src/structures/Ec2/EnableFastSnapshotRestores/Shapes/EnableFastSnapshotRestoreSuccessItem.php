<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableFastSnapshotRestores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotId
 * @property string|null $AvailabilityZone
 * @property 'enabling'|'optimizing'|'enabled'|'disabling'|'disabled'|null $State
 * @property string|null $StateTransitionReason
 * @property string|null $OwnerId
 * @property string|null $OwnerAlias
 * @property \Aws\Api\DateTimeResult|null $EnablingTime
 * @property \Aws\Api\DateTimeResult|null $OptimizingTime
 * @property \Aws\Api\DateTimeResult|null $EnabledTime
 * @property \Aws\Api\DateTimeResult|null $DisablingTime
 * @property \Aws\Api\DateTimeResult|null $DisabledTime
 */
class EnableFastSnapshotRestoreSuccessItem extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string|null,
     *     AvailabilityZone?: string|null,
     *     State?: 'enabling'|'optimizing'|'enabled'|'disabling'|'disabled'|null,
     *     StateTransitionReason?: string|null,
     *     OwnerId?: string|null,
     *     OwnerAlias?: string|null,
     *     EnablingTime?: \Aws\Api\DateTimeResult|null,
     *     OptimizingTime?: \Aws\Api\DateTimeResult|null,
     *     EnabledTime?: \Aws\Api\DateTimeResult|null,
     *     DisablingTime?: \Aws\Api\DateTimeResult|null,
     *     DisabledTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
