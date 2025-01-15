<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FOLLOW'|'HDR10'|'HLG_2020'|'REC_601'|'REC_709'|null $ColorSpace
 * @property VideoSelectorColorSpaceSettings|null $ColorSpaceSettings
 * @property 'FALLBACK'|'FORCE'|null $ColorSpaceUsage
 * @property VideoSelectorSettings|null $SelectorSettings
 */
class VideoSelector extends Shape
{
    /**
     * @param array{
     *     ColorSpace?: 'FOLLOW'|'HDR10'|'HLG_2020'|'REC_601'|'REC_709'|null,
     *     ColorSpaceSettings?: VideoSelectorColorSpaceSettings|null,
     *     ColorSpaceUsage?: 'FALLBACK'|'FORCE'|null,
     *     SelectorSettings?: VideoSelectorSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
