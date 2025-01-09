<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property string $OriginationNumber
 * @property string $SenderId
 * @property string $EntityId
 * @property string $TemplateId
 */
class JourneySMSMessage extends Shape
{
    /**
     * @param array{
     *     MessageType?: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     OriginationNumber?: string,
     *     SenderId?: string,
     *     EntityId?: string,
     *     TemplateId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
