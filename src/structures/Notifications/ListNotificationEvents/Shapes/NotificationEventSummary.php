<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'v1.0' $schemaVersion
 * @property SourceEventMetadataSummary $sourceEventMetadata
 * @property MessageComponentsSummary $messageComponents
 * @property 'HEALTHY'|'UNHEALTHY' $eventStatus
 * @property 'ALERT'|'WARNING'|'ANNOUNCEMENT'|'INFORMATIONAL' $notificationType
 */
class NotificationEventSummary extends Shape
{
    /**
     * @param array{
     *     schemaVersion: 'v1.0',
     *     sourceEventMetadata: SourceEventMetadataSummary,
     *     messageComponents: MessageComponentsSummary,
     *     eventStatus: 'HEALTHY'|'UNHEALTHY',
     *     notificationType: 'ALERT'|'WARNING'|'ANNOUNCEMENT'|'INFORMATIONAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
