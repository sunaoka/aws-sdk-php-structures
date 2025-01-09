<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $License
 * @property int<0, 4194303> $Payload
 * @property string $Preset
 * @property 'LIGHTEST'|'LIGHTER'|'DEFAULT'|'STRONGER'|'STRONGEST' $Strength
 */
class NexGuardFileMarkerSettings extends Shape
{
    /**
     * @param array{
     *     License?: string,
     *     Payload?: int<0, 4194303>,
     *     Preset?: string,
     *     Strength?: 'LIGHTEST'|'LIGHTER'|'DEFAULT'|'STRONGER'|'STRONGEST'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
