<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'L'|'R'|'C'|'LFE'|'LS'|'RS'|'LC'|'RC'|'CS'|'LSD'|'RSD'|'TCS'|'VHL'|'VHC'|'VHR'|'TBL'|'TBC'|'TBR'|'RSL'|'RSR'|'LW'|'RW'|'LFE2'|'LT'|'RT'|'HI'|'NAR'|'M'|null $ChannelTag
 * @property list<'L'|'R'|'C'|'LFE'|'LS'|'RS'|'LC'|'RC'|'CS'|'LSD'|'RSD'|'TCS'|'VHL'|'VHC'|'VHR'|'TBL'|'TBC'|'TBR'|'RSL'|'RSR'|'LW'|'RW'|'LFE2'|'LT'|'RT'|'HI'|'NAR'|'M'>|null $ChannelTags
 */
class AudioChannelTaggingSettings extends Shape
{
    /**
     * @param array{
     *     ChannelTag?: 'L'|'R'|'C'|'LFE'|'LS'|'RS'|'LC'|'RC'|'CS'|'LSD'|'RSD'|'TCS'|'VHL'|'VHC'|'VHR'|'TBL'|'TBC'|'TBR'|'RSL'|'RSR'|'LW'|'RW'|'LFE2'|'LT'|'RT'|'HI'|'NAR'|'M'|null,
     *     ChannelTags?: list<'L'|'R'|'C'|'LFE'|'LS'|'RS'|'LC'|'RC'|'CS'|'LSD'|'RSD'|'TCS'|'VHL'|'VHC'|'VHR'|'TBL'|'TBC'|'TBR'|'RSL'|'RSR'|'LW'|'RW'|'LFE2'|'LT'|'RT'|'HI'|'NAR'|'M'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
