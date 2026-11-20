<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MPEG2'|'AVC'|'HEVC'|'JPEGXS'|null $Codec
 * @property 'MAX_500_MBPS'|null $MaximumBitrate
 * @property 'HD'|null $Resolution
 */
class JpegXsInputSpecification extends Shape
{
    /**
     * @param array{
     *     Codec?: 'MPEG2'|'AVC'|'HEVC'|'JPEGXS'|null,
     *     MaximumBitrate?: 'MAX_500_MBPS'|null,
     *     Resolution?: 'HD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
