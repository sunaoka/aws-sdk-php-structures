<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorOrigination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int<0, 65535> $Port
 * @property 'TCP'|'UDP' $Protocol
 * @property int<1, 100> $Priority
 * @property int<1, 100> $Weight
 */
class OriginationRoute extends Shape
{
    /**
     * @param array{
     *     Host?: string,
     *     Port?: int<0, 65535>,
     *     Protocol?: 'TCP'|'UDP',
     *     Priority?: int<1, 100>,
     *     Weight?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
