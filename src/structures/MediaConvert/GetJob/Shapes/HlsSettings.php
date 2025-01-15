<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AudioGroupId
 * @property 'AUTOMATIC'|'M2TS'|null $AudioOnlyContainer
 * @property string|null $AudioRenditionSets
 * @property 'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM'|null $AudioTrackType
 * @property 'DONT_FLAG'|'FLAG'|null $DescriptiveVideoServiceFlag
 * @property 'INCLUDE'|'EXCLUDE'|null $IFrameOnlyManifest
 * @property string|null $SegmentModifier
 */
class HlsSettings extends Shape
{
    /**
     * @param array{
     *     AudioGroupId?: string|null,
     *     AudioOnlyContainer?: 'AUTOMATIC'|'M2TS'|null,
     *     AudioRenditionSets?: string|null,
     *     AudioTrackType?: 'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM'|null,
     *     DescriptiveVideoServiceFlag?: 'DONT_FLAG'|'FLAG'|null,
     *     IFrameOnlyManifest?: 'INCLUDE'|'EXCLUDE'|null,
     *     SegmentModifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
