<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventTypeVersion
 * @property string $sourceEventId
 * @property string|null $eventOriginRegion
 * @property string $relatedAccount
 * @property string $source
 * @property \Aws\Api\DateTimeResult $eventOccurrenceTime
 * @property string $eventType
 * @property list<Resource> $relatedResources
 */
class SourceEventMetadata extends Shape
{
    /**
     * @param array{
     *     eventTypeVersion: string,
     *     sourceEventId: string,
     *     eventOriginRegion?: string|null,
     *     relatedAccount: string,
     *     source: string,
     *     eventOccurrenceTime: \Aws\Api\DateTimeResult,
     *     eventType: string,
     *     relatedResources: list<Resource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
