<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\GetSignalingChannelEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'WSS'|'HTTPS'|'WEBRTC'>|null $Protocols
 * @property 'MASTER'|'VIEWER'|null $Role
 */
class SingleMasterChannelEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     Protocols?: list<'WSS'|'HTTPS'|'WEBRTC'>|null,
     *     Role?: 'MASTER'|'VIEWER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
