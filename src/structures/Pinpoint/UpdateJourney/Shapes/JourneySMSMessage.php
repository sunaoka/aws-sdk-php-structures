<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRANSACTIONAL'|'PROMOTIONAL'|null $MessageType
 * @property string|null $OriginationNumber
 * @property string|null $SenderId
 * @property string|null $EntityId
 * @property string|null $TemplateId
 */
class JourneySMSMessage extends Shape
{
    /**
     * @param array{
     *     MessageType?: 'TRANSACTIONAL'|'PROMOTIONAL'|null,
     *     OriginationNumber?: string|null,
     *     SenderId?: string|null,
     *     EntityId?: string|null,
     *     TemplateId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
