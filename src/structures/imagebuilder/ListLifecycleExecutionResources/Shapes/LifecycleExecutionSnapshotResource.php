<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $snapshotId
 * @property LifecycleExecutionResourceState|null $state
 */
class LifecycleExecutionSnapshotResource extends Shape
{
    /**
     * @param array{
     *     snapshotId?: string|null,
     *     state?: LifecycleExecutionResourceState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
