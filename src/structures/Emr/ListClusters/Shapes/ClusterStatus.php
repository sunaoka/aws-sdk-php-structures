<?php

namespace Sunaoka\Aws\Structures\Emr\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTING'|'BOOTSTRAPPING'|'RUNNING'|'WAITING'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS'|null $State
 * @property ClusterStateChangeReason|null $StateChangeReason
 * @property ClusterTimeline|null $Timeline
 * @property list<ErrorDetail>|null $ErrorDetails
 */
class ClusterStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'STARTING'|'BOOTSTRAPPING'|'RUNNING'|'WAITING'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS'|null,
     *     StateChangeReason?: ClusterStateChangeReason|null,
     *     Timeline?: ClusterTimeline|null,
     *     ErrorDetails?: list<ErrorDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
