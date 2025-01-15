<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventId
 * @property string|null $eventTypeName
 * @property string|null $eventTimestamp
 * @property array<string, string>|null $eventVariables
 * @property string|null $currentLabel
 * @property string|null $labelTimestamp
 * @property list<Entity>|null $entities
 */
class Event extends Shape
{
    /**
     * @param array{
     *     eventId?: string|null,
     *     eventTypeName?: string|null,
     *     eventTimestamp?: string|null,
     *     eventVariables?: array<string, string>|null,
     *     currentLabel?: string|null,
     *     labelTimestamp?: string|null,
     *     entities?: list<Entity>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
