<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetIncidentRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property list<AutomationExecution> $automationExecutions
 * @property ChatChannel $chatChannel
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $dedupeString
 * @property int $impact
 * @property IncidentRecordSource $incidentRecordSource
 * @property string $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property list<NotificationTargetItem> $notificationTargets
 * @property \Aws\Api\DateTimeResult $resolvedTime
 * @property 'OPEN'|'RESOLVED' $status
 * @property string $summary
 * @property string $title
 */
class IncidentRecord extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     automationExecutions?: list<AutomationExecution>,
     *     chatChannel?: ChatChannel,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     dedupeString: string,
     *     impact: int,
     *     incidentRecordSource: IncidentRecordSource,
     *     lastModifiedBy: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     notificationTargets?: list<NotificationTargetItem>,
     *     resolvedTime?: \Aws\Api\DateTimeResult,
     *     status: 'OPEN'|'RESOLVED',
     *     summary?: string,
     *     title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
