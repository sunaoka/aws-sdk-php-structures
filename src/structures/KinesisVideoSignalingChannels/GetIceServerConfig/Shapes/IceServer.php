<?php

namespace Sunaoka\Aws\Structures\KinesisVideoSignalingChannels\GetIceServerConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Uris
 * @property string $Username
 * @property string $Password
 * @property int<30, 86400> $Ttl
 */
class IceServer extends Shape
{
    /**
     * @param array{
     *     Uris?: list<string>,
     *     Username?: string,
     *     Password?: string,
     *     Ttl?: int<30, 86400>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
