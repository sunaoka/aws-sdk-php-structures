<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationChildEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'v1.0' $schemaVersion
 * @property ManagedSourceEventMetadataSummary $sourceEventMetadata
 * @property MessageComponentsSummary $messageComponents
 * @property AggregationDetail $aggregationDetail
 * @property 'HEALTHY'|'UNHEALTHY' $eventStatus
 * @property 'ALERT'|'WARNING'|'ANNOUNCEMENT'|'INFORMATIONAL' $notificationType
 */
class ManagedNotificationChildEventSummary extends Shape
{
    /**
     * @param array{
     *     schemaVersion: 'v1.0',
     *     sourceEventMetadata: ManagedSourceEventMetadataSummary,
     *     messageComponents: MessageComponentsSummary,
     *     aggregationDetail: AggregationDetail,
     *     eventStatus: 'HEALTHY'|'UNHEALTHY',
     *     notificationType: 'ALERT'|'WARNING'|'ANNOUNCEMENT'|'INFORMATIONAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
