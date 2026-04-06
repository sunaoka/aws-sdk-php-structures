<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutActionInteractions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionId
 * @property string|null $userId
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $eventType
 * @property string|null $eventId
 * @property string|null $recommendationId
 * @property list<string>|null $impression
 * @property string|null $properties
 */
class ActionInteraction extends Shape
{
    /**
     * @param array{
     *     actionId: string,
     *     userId?: string|null,
     *     sessionId: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     eventType: string,
     *     eventId?: string|null,
     *     recommendationId?: string|null,
     *     impression?: list<string>|null,
     *     properties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
