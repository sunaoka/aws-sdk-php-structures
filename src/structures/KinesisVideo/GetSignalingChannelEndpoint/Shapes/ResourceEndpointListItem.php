<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\GetSignalingChannelEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WSS'|'HTTPS'|'WEBRTC' $Protocol
 * @property string $ResourceEndpoint
 */
class ResourceEndpointListItem extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'WSS'|'HTTPS'|'WEBRTC',
     *     ResourceEndpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
