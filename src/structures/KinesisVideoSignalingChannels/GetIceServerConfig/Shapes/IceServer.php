<?php

namespace Sunaoka\Aws\Structures\KinesisVideoSignalingChannels\GetIceServerConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Uris
 * @property string|null $Username
 * @property string|null $Password
 * @property int<30, 86400>|null $Ttl
 */
class IceServer extends Shape
{
    /**
     * @param array{
     *     Uris?: list<string>|null,
     *     Username?: string|null,
     *     Password?: string|null,
     *     Ttl?: int<30, 86400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
