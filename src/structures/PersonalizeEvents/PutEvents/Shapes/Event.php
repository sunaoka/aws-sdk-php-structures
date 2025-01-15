<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventId
 * @property string $eventType
 * @property float|null $eventValue
 * @property string|null $itemId
 * @property string|null $properties
 * @property \Aws\Api\DateTimeResult $sentAt
 * @property string|null $recommendationId
 * @property list<string>|null $impression
 * @property MetricAttribution|null $metricAttribution
 */
class Event extends Shape
{
    /**
     * @param array{
     *     eventId?: string|null,
     *     eventType: string,
     *     eventValue?: float|null,
     *     itemId?: string|null,
     *     properties?: string|null,
     *     sentAt: \Aws\Api\DateTimeResult,
     *     recommendationId?: string|null,
     *     impression?: list<string>|null,
     *     metricAttribution?: MetricAttribution|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
