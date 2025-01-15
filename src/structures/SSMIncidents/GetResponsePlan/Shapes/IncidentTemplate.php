<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dedupeString
 * @property int<1, 5> $impact
 * @property array<string, string>|null $incidentTags
 * @property list<NotificationTargetItem>|null $notificationTargets
 * @property string|null $summary
 * @property string $title
 */
class IncidentTemplate extends Shape
{
    /**
     * @param array{
     *     dedupeString?: string|null,
     *     impact: int<1, 5>,
     *     incidentTags?: array<string, string>|null,
     *     notificationTargets?: list<NotificationTargetItem>|null,
     *     summary?: string|null,
     *     title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
