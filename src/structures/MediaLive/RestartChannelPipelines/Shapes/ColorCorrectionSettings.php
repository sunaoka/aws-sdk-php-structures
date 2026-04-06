<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

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
