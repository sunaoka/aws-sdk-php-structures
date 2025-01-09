<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColorSpacePassthroughSettings $ColorSpacePassthroughSettings
 * @property Rec601Settings $Rec601Settings
 * @property Rec709Settings $Rec709Settings
 */
class H264ColorSpaceSettings extends Shape
{
    /**
     * @param array{
     *     ColorSpacePassthroughSettings?: ColorSpacePassthroughSettings,
     *     Rec601Settings?: Rec601Settings,
     *     Rec709Settings?: Rec709Settings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
