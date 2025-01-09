<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColorSpacePassthroughSettings $ColorSpacePassthroughSettings
 * @property DolbyVision81Settings $DolbyVision81Settings
 * @property Hdr10Settings $Hdr10Settings
 * @property Rec601Settings $Rec601Settings
 * @property Rec709Settings $Rec709Settings
 */
class H265ColorSpaceSettings extends Shape
{
    /**
     * @param array{
     *     ColorSpacePassthroughSettings?: ColorSpacePassthroughSettings,
     *     DolbyVision81Settings?: DolbyVision81Settings,
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
