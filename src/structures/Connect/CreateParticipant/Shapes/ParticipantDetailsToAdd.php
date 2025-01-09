<?php

namespace Sunaoka\Aws\Structures\Connect\CreateParticipant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR' $ParticipantRole
 * @property string $DisplayName
 */
class ParticipantDetailsToAdd extends Shape
{
    /**
     * @param array{
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR',
     *     DisplayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
