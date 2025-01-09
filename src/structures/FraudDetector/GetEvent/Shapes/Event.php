<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property string $eventTypeName
 * @property string $eventTimestamp
 * @property array<string, string> $eventVariables
 * @property string $currentLabel
 * @property string $labelTimestamp
 * @property list<Entity> $entities
 */
class Event extends Shape
{
    /**
     * @param array{
     *     eventId?: string,
     *     eventTypeName?: string,
     *     eventTimestamp?: string,
     *     eventVariables?: array<string, string>,
     *     currentLabel?: string,
     *     labelTimestamp?: string,
     *     entities?: list<Entity>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
