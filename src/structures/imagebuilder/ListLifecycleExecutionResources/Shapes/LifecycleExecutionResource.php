<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $resourceId
 * @property LifecycleExecutionResourceState|null $state
 * @property LifecycleExecutionResourceAction|null $action
 * @property string|null $region
 * @property list<LifecycleExecutionSnapshotResource>|null $snapshots
 * @property list<string>|null $imageUris
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class LifecycleExecutionResource extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     resourceId?: string|null,
     *     state?: LifecycleExecutionResourceState|null,
     *     action?: LifecycleExecutionResourceAction|null,
     *     region?: string|null,
     *     snapshots?: list<LifecycleExecutionSnapshotResource>|null,
     *     imageUris?: list<string>|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
