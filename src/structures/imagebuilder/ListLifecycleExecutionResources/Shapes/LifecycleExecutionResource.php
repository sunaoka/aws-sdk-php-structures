<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $resourceId
 * @property LifecycleExecutionResourceState $state
 * @property LifecycleExecutionResourceAction $action
 * @property string $region
 * @property list<LifecycleExecutionSnapshotResource> $snapshots
 * @property list<string> $imageUris
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class LifecycleExecutionResource extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     resourceId?: string,
     *     state?: LifecycleExecutionResourceState,
     *     action?: LifecycleExecutionResourceAction,
     *     region?: string,
     *     snapshots?: list<LifecycleExecutionSnapshotResource>,
     *     imageUris?: list<string>,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
