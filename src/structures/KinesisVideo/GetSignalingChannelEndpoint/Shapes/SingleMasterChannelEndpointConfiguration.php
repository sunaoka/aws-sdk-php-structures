<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\GetSignalingChannelEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'WSS'|'HTTPS'|'WEBRTC'> $Protocols
 * @property 'MASTER'|'VIEWER' $Role
 */
class SingleMasterChannelEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     Protocols?: list<'WSS'|'HTTPS'|'WEBRTC'>,
     *     Role?: 'MASTER'|'VIEWER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
