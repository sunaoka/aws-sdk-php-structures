<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColorSpacePassthroughSettings|null $ColorSpacePassthroughSettings
 * @property DolbyVision81Settings|null $DolbyVision81Settings
 * @property Hdr10Settings|null $Hdr10Settings
 * @property Rec601Settings|null $Rec601Settings
 * @property Rec709Settings|null $Rec709Settings
 * @property Hlg2020Settings|null $Hlg2020Settings
 */
class H265ColorSpaceSettings extends Shape
{
    /**
     * @param array{
     *     ColorSpacePassthroughSettings?: ColorSpacePassthroughSettings|null,
     *     DolbyVision81Settings?: DolbyVision81Settings|null,
     *     Hdr10Settings?: Hdr10Settings|null,
     *     Rec601Settings?: Rec601Settings|null,
     *     Rec709Settings?: Rec709Settings|null,
     *     Hlg2020Settings?: Hlg2020Settings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
