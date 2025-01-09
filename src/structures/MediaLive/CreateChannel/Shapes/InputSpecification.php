<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MPEG2'|'AVC'|'HEVC' $Codec
 * @property 'MAX_10_MBPS'|'MAX_20_MBPS'|'MAX_50_MBPS' $MaximumBitrate
 * @property 'SD'|'HD'|'UHD' $Resolution
 */
class InputSpecification extends Shape
{
    /**
     * @param array{
     *     Codec?: 'MPEG2'|'AVC'|'HEVC',
     *     MaximumBitrate?: 'MAX_10_MBPS'|'MAX_20_MBPS'|'MAX_50_MBPS',
     *     Resolution?: 'SD'|'HD'|'UHD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
