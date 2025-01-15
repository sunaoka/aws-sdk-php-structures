<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColorSpacePassthroughSettings|null $ColorSpacePassthroughSettings
 * @property Rec601Settings|null $Rec601Settings
 * @property Rec709Settings|null $Rec709Settings
 */
class H264ColorSpaceSettings extends Shape
{
    /**
     * @param array{
     *     ColorSpacePassthroughSettings?: ColorSpacePassthroughSettings|null,
     *     Rec601Settings?: Rec601Settings|null,
     *     Rec709Settings?: Rec709Settings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
