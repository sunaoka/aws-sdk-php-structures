<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'L'|'R'|'C'|'LFE'|'LS'|'RS'|'LC'|'RC'|'CS'|'LSD'|'RSD'|'TCS'|'VHL'|'VHC'|'VHR'|null $ChannelTag
 */
class AudioChannelTaggingSettings extends Shape
{
    /**
     * @param array{ChannelTag?: 'L'|'R'|'C'|'LFE'|'LS'|'RS'|'LC'|'RC'|'CS'|'LSD'|'RSD'|'TCS'|'VHL'|'VHC'|'VHR'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
