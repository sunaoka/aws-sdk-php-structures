<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowMediaStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelOrder
 * @property 'BT601'|'BT709'|'BT2020'|'BT2100'|'ST2065-1'|'ST2065-3'|'XYZ' $Colorimetry
 * @property string $ExactFramerate
 * @property string $Par
 * @property 'NARROW'|'FULL'|'FULLPROTECT' $Range
 * @property 'progressive'|'interlace'|'progressive-segmented-frame' $ScanMode
 * @property 'SDR'|'PQ'|'HLG'|'LINEAR'|'BT2100LINPQ'|'BT2100LINHLG'|'ST2065-1'|'ST428-1'|'DENSITY' $Tcs
 */
class Fmtp extends Shape
{
    /**
     * @param array{
     *     ChannelOrder?: string,
     *     Colorimetry?: 'BT601'|'BT709'|'BT2020'|'BT2100'|'ST2065-1'|'ST2065-3'|'XYZ',
     *     ExactFramerate?: string,
     *     Par?: string,
     *     Range?: 'NARROW'|'FULL'|'FULLPROTECT',
     *     ScanMode?: 'progressive'|'interlace'|'progressive-segmented-frame',
     *     Tcs?: 'SDR'|'PQ'|'HLG'|'LINEAR'|'BT2100LINPQ'|'BT2100LINHLG'|'ST2065-1'|'ST428-1'|'DENSITY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
