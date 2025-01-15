<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\GetSignalingChannelEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WSS'|'HTTPS'|'WEBRTC'|null $Protocol
 * @property string|null $ResourceEndpoint
 */
class ResourceEndpointListItem extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'WSS'|'HTTPS'|'WEBRTC'|null,
     *     ResourceEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
