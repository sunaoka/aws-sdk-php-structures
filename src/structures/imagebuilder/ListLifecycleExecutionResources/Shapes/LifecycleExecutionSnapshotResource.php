<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $snapshotId
 * @property LifecycleExecutionResourceState $state
 */
class LifecycleExecutionSnapshotResource extends Shape
{
    /**
     * @param array{
     *     snapshotId?: string,
     *     state?: LifecycleExecutionResourceState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
