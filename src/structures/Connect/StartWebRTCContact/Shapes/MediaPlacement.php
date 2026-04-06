<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AudioHostUrl
 * @property string|null $AudioFallbackUrl
 * @property string|null $SignalingUrl
 * @property string|null $TurnControlUrl
 * @property string|null $EventIngestionUrl
 */
class MediaPlacement extends Shape
{
    /**
     * @param array{
     *     AudioHostUrl?: string|null,
     *     AudioFallbackUrl?: string|null,
     *     SignalingUrl?: string|null,
     *     TurnControlUrl?: string|null,
     *     EventIngestionUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
