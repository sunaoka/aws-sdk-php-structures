<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FRAMERATE_23_97'|'FRAMERATE_24'|'FRAMERATE_25'|'FRAMERATE_29_97_DROPFRAME'|'FRAMERATE_29_97_NON_DROPFRAME' $Framerate
 */
class SccDestinationSettings extends Shape
{
    /**
     * @param array{Framerate?: 'FRAMERATE_23_97'|'FRAMERATE_24'|'FRAMERATE_25'|'FRAMERATE_29_97_DROPFRAME'|'FRAMERATE_29_97_NON_DROPFRAME'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
