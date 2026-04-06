<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParticipantCapabilities|null $Customer
 * @property ParticipantCapabilities|null $Agent
 */
class AllowedCapabilities extends Shape
{
    /**
     * @param array{
     *     Customer?: ParticipantCapabilities|null,
     *     Agent?: ParticipantCapabilities|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
