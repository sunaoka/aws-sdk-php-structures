<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MPEG2'|'AVC'|'HEVC'|null $Codec
 * @property 'MAX_10_MBPS'|'MAX_20_MBPS'|'MAX_50_MBPS'|null $MaximumBitrate
 * @property 'SD'|'HD'|'UHD'|null $Resolution
 */
class InputSpecification extends Shape
{
    /**
     * @param array{
     *     Codec?: 'MPEG2'|'AVC'|'HEVC'|null,
     *     MaximumBitrate?: 'MAX_10_MBPS'|'MAX_20_MBPS'|'MAX_50_MBPS'|null,
     *     Resolution?: 'SD'|'HD'|'UHD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
