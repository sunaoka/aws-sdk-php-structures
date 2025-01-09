<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorOrigination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int $Port
 * @property 'TCP'|'UDP' $Protocol
 * @property int $Priority
 * @property int $Weight
 */
class OriginationRoute extends Shape
{
    /**
     * @param array{
     *     Host?: string,
     *     Port?: int,
     *     Protocol?: 'TCP'|'UDP',
     *     Priority?: int,
     *     Weight?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
