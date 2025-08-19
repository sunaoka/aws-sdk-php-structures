<?php

namespace Sunaoka\Aws\Structures\Connect\CreateParticipant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR'|null $ParticipantRole
 * @property string|null $DisplayName
 * @property ParticipantCapabilities|null $ParticipantCapabilities
 */
class ParticipantDetailsToAdd extends Shape
{
    /**
     * @param array{
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR'|null,
     *     DisplayName?: string|null,
     *     ParticipantCapabilities?: ParticipantCapabilities|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
