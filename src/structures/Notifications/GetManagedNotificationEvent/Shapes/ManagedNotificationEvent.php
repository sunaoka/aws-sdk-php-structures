<?php

namespace Sunaoka\Aws\Structures\Notifications\GetManagedNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'v1.0' $schemaVersion
 * @property string $id
 * @property MessageComponents $messageComponents
 * @property string|null $sourceEventDetailUrl
 * @property string|null $sourceEventDetailUrlDisplayText
 * @property 'ALERT'|'WARNING'|'ANNOUNCEMENT'|'INFORMATIONAL' $notificationType
 * @property 'HEALTHY'|'UNHEALTHY'|null $eventStatus
 * @property 'AGGREGATE'|'CHILD'|'NONE'|null $aggregationEventType
 * @property AggregationSummary|null $aggregationSummary
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property array<string, TextPartValue> $textParts
 * @property string|null $organizationalUnitId
 */
class ManagedNotificationEvent extends Shape
{
    /**
     * @param array{
     *     schemaVersion: 'v1.0',
     *     id: string,
     *     messageComponents: MessageComponents,
     *     sourceEventDetailUrl?: string|null,
     *     sourceEventDetailUrlDisplayText?: string|null,
     *     notificationType: 'ALERT'|'WARNING'|'ANNOUNCEMENT'|'INFORMATIONAL',
     *     eventStatus?: 'HEALTHY'|'UNHEALTHY'|null,
     *     aggregationEventType?: 'AGGREGATE'|'CHILD'|'NONE'|null,
     *     aggregationSummary?: AggregationSummary|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     textParts: array<string, TextPartValue>,
     *     organizationalUnitId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
