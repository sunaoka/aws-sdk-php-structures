<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColorCorrection> $GlobalColorCorrections
 */
class ColorCorrectionSettings extends Shape
{
    /**
     * @param array{GlobalColorCorrections: list<ColorCorrection>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
