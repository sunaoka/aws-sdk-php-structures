<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEND'|null $Video
 * @property 'SEND'|null $ScreenShare
 */
class ParticipantCapabilities extends Shape
{
    /**
     * @param array{
     *     Video?: 'SEND'|null,
     *     ScreenShare?: 'SEND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
