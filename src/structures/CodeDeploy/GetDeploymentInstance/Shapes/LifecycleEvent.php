<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lifecycleEventName
 * @property Diagnostics $diagnostics
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown' $status
 */
class LifecycleEvent extends Shape
{
    /**
     * @param array{
     *     lifecycleEventName?: string,
     *     diagnostics?: Diagnostics,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     status?: 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
