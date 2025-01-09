<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParticipantCapabilities $Customer
 * @property ParticipantCapabilities $Agent
 */
class AllowedCapabilities extends Shape
{
    /**
     * @param array{
     *     Customer?: ParticipantCapabilities,
     *     Agent?: ParticipantCapabilities
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
