<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'L'|'R'|'C'|'LFE'|'LS'|'RS'|'LC'|'RC'|'CS'|'LSD'|'RSD'|'TCS'|'VHL'|'VHC'|'VHR'|'TBL'|'TBC'|'TBR'|'RSL'|'RSR'|'LW'|'RW'|'LFE2'|'LT'|'RT'|'HI'|'NAR'|'M' $ChannelTag
 * @property list<'L'|'R'|'C'|'LFE'|'LS'|'RS'|'LC'|'RC'|'CS'|'LSD'|'RSD'|'TCS'|'VHL'|'VHC'|'VHR'|'TBL'|'TBC'|'TBR'|'RSL'|'RSR'|'LW'|'RW'|'LFE2'|'LT'|'RT'|'HI'|'NAR'|'M'> $ChannelTags
 */
class AudioChannelTaggingSettings extends Shape
{
    /**
     * @param array{
     *     ChannelTag?: 'L'|'R'|'C'|'LFE'|'LS'|'RS'|'LC'|'RC'|'CS'|'LSD'|'RSD'|'TCS'|'VHL'|'VHC'|'VHR'|'TBL'|'TBC'|'TBR'|'RSL'|'RSR'|'LW'|'RW'|'LFE2'|'LT'|'RT'|'HI'|'NAR'|'M',
     *     ChannelTags?: list<'L'|'R'|'C'|'LFE'|'LS'|'RS'|'LC'|'RC'|'CS'|'LSD'|'RSD'|'TCS'|'VHL'|'VHC'|'VHR'|'TBL'|'TBC'|'TBR'|'RSL'|'RSR'|'LW'|'RW'|'LFE2'|'LT'|'RT'|'HI'|'NAR'|'M'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
