<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property string $eventType
 * @property float $eventValue
 * @property string $itemId
 * @property string $properties
 * @property \Aws\Api\DateTimeResult $sentAt
 * @property string $recommendationId
 * @property list<string> $impression
 * @property MetricAttribution $metricAttribution
 */
class Event extends Shape
{
    /**
     * @param array{
     *     eventId?: string,
     *     eventType: string,
     *     eventValue?: float,
     *     itemId?: string,
     *     properties?: string,
     *     sentAt: \Aws\Api\DateTimeResult,
     *     recommendationId?: string,
     *     impression?: list<string>,
     *     metricAttribution?: MetricAttribution
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
