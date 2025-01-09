<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTING'|'BOOTSTRAPPING'|'RUNNING'|'WAITING'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS' $State
 * @property ClusterStateChangeReason $StateChangeReason
 * @property ClusterTimeline $Timeline
 * @property list<ErrorDetail> $ErrorDetails
 */
class ClusterStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'STARTING'|'BOOTSTRAPPING'|'RUNNING'|'WAITING'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS',
     *     StateChangeReason?: ClusterStateChangeReason,
     *     Timeline?: ClusterTimeline,
     *     ErrorDetails?: list<ErrorDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
