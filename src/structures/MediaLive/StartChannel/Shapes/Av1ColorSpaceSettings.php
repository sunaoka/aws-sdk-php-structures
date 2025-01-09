<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColorSpacePassthroughSettings $ColorSpacePassthroughSettings
 * @property Hdr10Settings $Hdr10Settings
 * @property Rec601Settings $Rec601Settings
 * @property Rec709Settings $Rec709Settings
 */
class Av1ColorSpaceSettings extends Shape
{
    /**
     * @param array{
     *     ColorSpacePassthroughSettings?: ColorSpacePassthroughSettings,
     *     Hdr10Settings?: Hdr10Settings,
     *     Rec601Settings?: Rec601Settings,
     *     Rec709Settings?: Rec709Settings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
