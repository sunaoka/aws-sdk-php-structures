<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FOLLOW'|'HDR10'|'HLG_2020'|'REC_601'|'REC_709' $ColorSpace
 * @property VideoSelectorColorSpaceSettings $ColorSpaceSettings
 * @property 'FALLBACK'|'FORCE' $ColorSpaceUsage
 * @property VideoSelectorSettings $SelectorSettings
 */
class VideoSelector extends Shape
{
    /**
     * @param array{
     *     ColorSpace?: 'FOLLOW'|'HDR10'|'HLG_2020'|'REC_601'|'REC_709',
     *     ColorSpaceSettings?: VideoSelectorColorSpaceSettings,
     *     ColorSpaceUsage?: 'FALLBACK'|'FORCE',
     *     SelectorSettings?: VideoSelectorSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
