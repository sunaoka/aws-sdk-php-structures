<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'READY'|'STARTING'|'RUNNING'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR'|'DELETING' $State
 * @property string $StateReason
 * @property 'INVALID_PERMISSIONS'|'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_PENDING'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'SYNC_DELETE_IN_PROGRESS' $StateReasonCode
 */
class CanaryStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'CREATING'|'READY'|'STARTING'|'RUNNING'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR'|'DELETING',
     *     StateReason?: string,
     *     StateReasonCode?: 'INVALID_PERMISSIONS'|'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_PENDING'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'SYNC_DELETE_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
