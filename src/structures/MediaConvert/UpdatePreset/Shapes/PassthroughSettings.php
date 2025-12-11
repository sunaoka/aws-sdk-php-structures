<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEAREST_IDRFRAME'|'NEAREST_IFRAME'|null $FrameControl
 * @property 'AUTO'|'REMUX_ALL'|null $VideoSelectorMode
 */
class PassthroughSettings extends Shape
{
    /**
     * @param array{
     *     FrameControl?: 'NEAREST_IDRFRAME'|'NEAREST_IFRAME'|null,
     *     VideoSelectorMode?: 'AUTO'|'REMUX_ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
