<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lifecycleEventName
 * @property Diagnostics|null $diagnostics
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|null $status
 */
class LifecycleEvent extends Shape
{
    /**
     * @param array{
     *     lifecycleEventName?: string|null,
     *     diagnostics?: Diagnostics|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
