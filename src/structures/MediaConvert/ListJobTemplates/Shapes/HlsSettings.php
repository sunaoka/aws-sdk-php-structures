<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AudioGroupId
 * @property 'AUTOMATIC'|'M2TS' $AudioOnlyContainer
 * @property string $AudioRenditionSets
 * @property 'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM' $AudioTrackType
 * @property 'DONT_FLAG'|'FLAG' $DescriptiveVideoServiceFlag
 * @property 'INCLUDE'|'EXCLUDE' $IFrameOnlyManifest
 * @property string $SegmentModifier
 */
class HlsSettings extends Shape
{
    /**
     * @param array{
     *     AudioGroupId?: string,
     *     AudioOnlyContainer?: 'AUTOMATIC'|'M2TS',
     *     AudioRenditionSets?: string,
     *     AudioTrackType?: 'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM',
     *     DescriptiveVideoServiceFlag?: 'DONT_FLAG'|'FLAG',
     *     IFrameOnlyManifest?: 'INCLUDE'|'EXCLUDE',
     *     SegmentModifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
