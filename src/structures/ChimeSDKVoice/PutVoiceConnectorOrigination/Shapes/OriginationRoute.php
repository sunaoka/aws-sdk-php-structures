<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorOrigination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Host
 * @property int<0, 65535>|null $Port
 * @property 'TCP'|'UDP'|null $Protocol
 * @property int<1, 100>|null $Priority
 * @property int<1, 100>|null $Weight
 */
class OriginationRoute extends Shape
{
    /**
     * @param array{
     *     Host?: string|null,
     *     Port?: int<0, 65535>|null,
     *     Protocol?: 'TCP'|'UDP'|null,
     *     Priority?: int<1, 100>|null,
     *     Weight?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
