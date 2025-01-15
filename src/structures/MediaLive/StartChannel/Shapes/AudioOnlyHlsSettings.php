<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AudioGroupId
 * @property InputLocation|null $AudioOnlyImage
 * @property 'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM'|null $AudioTrackType
 * @property 'AAC'|'FMP4'|null $SegmentType
 */
class AudioOnlyHlsSettings extends Shape
{
    /**
     * @param array{
     *     AudioGroupId?: string|null,
     *     AudioOnlyImage?: InputLocation|null,
     *     AudioTrackType?: 'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM'|null,
     *     SegmentType?: 'AAC'|'FMP4'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
