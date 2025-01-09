<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $License
 * @property int $Payload
 * @property string $Preset
 * @property 'LIGHTEST'|'LIGHTER'|'DEFAULT'|'STRONGER'|'STRONGEST' $Strength
 */
class NexGuardFileMarkerSettings extends Shape
{
    /**
     * @param array{
     *     License?: string,
     *     Payload?: int,
     *     Preset?: string,
     *     Strength?: 'LIGHTEST'|'LIGHTER'|'DEFAULT'|'STRONGER'|'STRONGEST'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
