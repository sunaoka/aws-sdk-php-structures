<?php

namespace Sunaoka\Aws\Structures\KinesisVideoSignalingChannels\GetIceServerConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Uris
 * @property string $Username
 * @property string $Password
 * @property int $Ttl
 */
class IceServer extends Shape
{
    /**
     * @param array{
     *     Uris?: list<string>,
     *     Username?: string,
     *     Password?: string,
     *     Ttl?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
