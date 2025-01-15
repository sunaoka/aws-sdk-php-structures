<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetIncidentRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property list<AutomationExecution>|null $automationExecutions
 * @property ChatChannel|null $chatChannel
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $dedupeString
 * @property int<1, 5> $impact
 * @property IncidentRecordSource $incidentRecordSource
 * @property string $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property list<NotificationTargetItem>|null $notificationTargets
 * @property \Aws\Api\DateTimeResult|null $resolvedTime
 * @property 'OPEN'|'RESOLVED' $status
 * @property string|null $summary
 * @property string $title
 */
class IncidentRecord extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     automationExecutions?: list<AutomationExecution>|null,
     *     chatChannel?: ChatChannel|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     dedupeString: string,
     *     impact: int<1, 5>,
     *     incidentRecordSource: IncidentRecordSource,
     *     lastModifiedBy: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     notificationTargets?: list<NotificationTargetItem>|null,
     *     resolvedTime?: \Aws\Api\DateTimeResult|null,
     *     status: 'OPEN'|'RESOLVED',
     *     summary?: string|null,
     *     title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
