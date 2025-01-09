<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'v1.0' $schemaVersion
 * @property string $id
 * @property SourceEventMetadata $sourceEventMetadata
 * @property MessageComponents $messageComponents
 * @property string $sourceEventDetailUrl
 * @property string $sourceEventDetailUrlDisplayText
 * @property 'ALERT'|'WARNING'|'ANNOUNCEMENT'|'INFORMATIONAL' $notificationType
 * @property 'HEALTHY'|'UNHEALTHY' $eventStatus
 * @property 'AGGREGATE'|'CHILD'|'NONE' $aggregationEventType
 * @property string $aggregateNotificationEventArn
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property array<string, TextPartValue> $textParts
 * @property list<MediaElement> $media
 */
class NotificationEvent extends Shape
{
    /**
     * @param array{
     *     schemaVersion: 'v1.0',
     *     id: string,
     *     sourceEventMetadata: SourceEventMetadata,
     *     messageComponents: MessageComponents,
     *     sourceEventDetailUrl?: string,
     *     sourceEventDetailUrlDisplayText?: string,
     *     notificationType: 'ALERT'|'WARNING'|'ANNOUNCEMENT'|'INFORMATIONAL',
     *     eventStatus?: 'HEALTHY'|'UNHEALTHY',
     *     aggregationEventType?: 'AGGREGATE'|'CHILD'|'NONE',
     *     aggregateNotificationEventArn?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     textParts: array<string, TextPartValue>,
     *     media: list<MediaElement>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
