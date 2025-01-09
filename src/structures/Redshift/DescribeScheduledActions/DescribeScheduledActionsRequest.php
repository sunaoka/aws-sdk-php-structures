<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeScheduledActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduledActionName
 * @property 'ResizeCluster'|'PauseCluster'|'ResumeCluster' $TargetActionType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property bool $Active
 * @property list<Shapes\ScheduledActionFilter> $Filters
 * @property string $Marker
 * @property int $MaxRecords
 */
class DescribeScheduledActionsRequest extends Request
{
    /**
     * @param array{
     *     ScheduledActionName?: string,
     *     TargetActionType?: 'ResizeCluster'|'PauseCluster'|'ResumeCluster',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Active?: bool,
     *     Filters?: list<Shapes\ScheduledActionFilter>,
     *     Marker?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
