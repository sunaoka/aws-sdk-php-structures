<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioOnlyHlsSettings $AudioOnlyHlsSettings
 * @property Fmp4HlsSettings $Fmp4HlsSettings
 * @property FrameCaptureHlsSettings $FrameCaptureHlsSettings
 * @property StandardHlsSettings $StandardHlsSettings
 */
class HlsSettings extends Shape
{
    /**
     * @param array{
     *     AudioOnlyHlsSettings?: AudioOnlyHlsSettings,
     *     Fmp4HlsSettings?: Fmp4HlsSettings,
     *     FrameCaptureHlsSettings?: FrameCaptureHlsSettings,
     *     StandardHlsSettings?: StandardHlsSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
