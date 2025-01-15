<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $License
 * @property int<0, 4194303>|null $Payload
 * @property string|null $Preset
 * @property 'LIGHTEST'|'LIGHTER'|'DEFAULT'|'STRONGER'|'STRONGEST'|null $Strength
 */
class NexGuardFileMarkerSettings extends Shape
{
    /**
     * @param array{
     *     License?: string|null,
     *     Payload?: int<0, 4194303>|null,
     *     Preset?: string|null,
     *     Strength?: 'LIGHTEST'|'LIGHTER'|'DEFAULT'|'STRONGER'|'STRONGEST'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
