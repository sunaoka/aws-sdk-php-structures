<?php

namespace Sunaoka\Aws\Structures\FraudDetector\SendEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventId
 * @property string $eventTypeName
 * @property string $eventTimestamp
 * @property array<string, string> $eventVariables
 * @property string|null $assignedLabel
 * @property string|null $labelTimestamp
 * @property list<Shapes\Entity> $entities
 */
class SendEventRequest extends Request
{
    /**
     * @param array{
     *     eventId: string,
     *     eventTypeName: string,
     *     eventTimestamp: string,
     *     eventVariables: array<string, string>,
     *     assignedLabel?: string|null,
     *     labelTimestamp?: string|null,
     *     entities: list<Shapes\Entity>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
