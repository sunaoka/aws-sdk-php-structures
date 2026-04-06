<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'CANCELED' $Status
 * @property Participant $OtherParticipant
 */
class ConnectionTypeSummary extends Shape
{
    /**
     * @param array{
     *     Status: 'ACTIVE'|'CANCELED',
     *     OtherParticipant: Participant
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
