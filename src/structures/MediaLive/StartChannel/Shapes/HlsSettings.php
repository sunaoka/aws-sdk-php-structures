<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioOnlyHlsSettings|null $AudioOnlyHlsSettings
 * @property Fmp4HlsSettings|null $Fmp4HlsSettings
 * @property FrameCaptureHlsSettings|null $FrameCaptureHlsSettings
 * @property StandardHlsSettings|null $StandardHlsSettings
 */
class HlsSettings extends Shape
{
    /**
     * @param array{
     *     AudioOnlyHlsSettings?: AudioOnlyHlsSettings|null,
     *     Fmp4HlsSettings?: Fmp4HlsSettings|null,
     *     FrameCaptureHlsSettings?: FrameCaptureHlsSettings|null,
     *     StandardHlsSettings?: StandardHlsSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
