<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dedupeString
 * @property int $impact
 * @property array<string, string> $incidentTags
 * @property list<NotificationTargetItem> $notificationTargets
 * @property string $summary
 * @property string $title
 */
class IncidentTemplate extends Shape
{
    /**
     * @param array{
     *     dedupeString?: string,
     *     impact: int,
     *     incidentTags?: array<string, string>,
     *     notificationTargets?: list<NotificationTargetItem>,
     *     summary?: string,
     *     title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
