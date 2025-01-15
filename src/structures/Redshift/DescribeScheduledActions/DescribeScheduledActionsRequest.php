<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeScheduledActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ScheduledActionName
 * @property 'ResizeCluster'|'PauseCluster'|'ResumeCluster'|null $TargetActionType
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property bool|null $Active
 * @property list<Shapes\ScheduledActionFilter>|null $Filters
 * @property string|null $Marker
 * @property int|null $MaxRecords
 */
class DescribeScheduledActionsRequest extends Request
{
    /**
     * @param array{
     *     ScheduledActionName?: string|null,
     *     TargetActionType?: 'ResizeCluster'|'PauseCluster'|'ResumeCluster'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Active?: bool|null,
     *     Filters?: list<Shapes\ScheduledActionFilter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
