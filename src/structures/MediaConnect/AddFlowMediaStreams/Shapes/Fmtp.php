<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowMediaStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelOrder
 * @property 'BT601'|'BT709'|'BT2020'|'BT2100'|'ST2065-1'|'ST2065-3'|'XYZ'|null $Colorimetry
 * @property string|null $ExactFramerate
 * @property string|null $Par
 * @property 'NARROW'|'FULL'|'FULLPROTECT'|null $Range
 * @property 'progressive'|'interlace'|'progressive-segmented-frame'|null $ScanMode
 * @property 'SDR'|'PQ'|'HLG'|'LINEAR'|'BT2100LINPQ'|'BT2100LINHLG'|'ST2065-1'|'ST428-1'|'DENSITY'|null $Tcs
 */
class Fmtp extends Shape
{
    /**
     * @param array{
     *     ChannelOrder?: string|null,
     *     Colorimetry?: 'BT601'|'BT709'|'BT2020'|'BT2100'|'ST2065-1'|'ST2065-3'|'XYZ'|null,
     *     ExactFramerate?: string|null,
     *     Par?: string|null,
     *     Range?: 'NARROW'|'FULL'|'FULLPROTECT'|null,
     *     ScanMode?: 'progressive'|'interlace'|'progressive-segmented-frame'|null,
     *     Tcs?: 'SDR'|'PQ'|'HLG'|'LINEAR'|'BT2100LINPQ'|'BT2100LINHLG'|'ST2065-1'|'ST428-1'|'DENSITY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
