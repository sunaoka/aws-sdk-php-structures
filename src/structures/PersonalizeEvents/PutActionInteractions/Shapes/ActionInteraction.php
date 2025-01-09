<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutActionInteractions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionId
 * @property string $userId
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $eventType
 * @property string $eventId
 * @property string $recommendationId
 * @property list<string> $impression
 * @property string $properties
 */
class ActionInteraction extends Shape
{
    /**
     * @param array{
     *     actionId: string,
     *     userId?: string,
     *     sessionId: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     eventType: string,
     *     eventId?: string,
     *     recommendationId?: string,
     *     impression?: list<string>,
     *     properties?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
