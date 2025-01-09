<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AudioGroupId
 * @property InputLocation $AudioOnlyImage
 * @property 'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM' $AudioTrackType
 * @property 'AAC'|'FMP4' $SegmentType
 */
class AudioOnlyHlsSettings extends Shape
{
    /**
     * @param array{
     *     AudioGroupId?: string,
     *     AudioOnlyImage?: InputLocation,
     *     AudioTrackType?: 'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM',
     *     SegmentType?: 'AAC'|'FMP4'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
