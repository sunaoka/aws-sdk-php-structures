<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION' $AudioDuration
 * @property string $AudioGroupId
 * @property string $AudioRenditionSets
 * @property 'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM' $AudioTrackType
 * @property 'DONT_FLAG'|'FLAG' $DescriptiveVideoServiceFlag
 * @property 'INCLUDE'|'EXCLUDE' $IFrameOnlyManifest
 * @property 'PASSTHROUGH'|'NONE' $KlvMetadata
 * @property 'ENABLED'|'DISABLED' $ManifestMetadataSignaling
 * @property 'INSERT'|'NONE' $Scte35Esam
 * @property 'PASSTHROUGH'|'NONE' $Scte35Source
 * @property 'PASSTHROUGH'|'NONE' $TimedMetadata
 * @property 'VERSION_0'|'VERSION_1' $TimedMetadataBoxVersion
 * @property string $TimedMetadataSchemeIdUri
 * @property string $TimedMetadataValue
 */
class CmfcSettings extends Shape
{
    /**
     * @param array{
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION',
     *     AudioGroupId?: string,
     *     AudioRenditionSets?: string,
     *     AudioTrackType?: 'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM',
     *     DescriptiveVideoServiceFlag?: 'DONT_FLAG'|'FLAG',
     *     IFrameOnlyManifest?: 'INCLUDE'|'EXCLUDE',
     *     KlvMetadata?: 'PASSTHROUGH'|'NONE',
     *     ManifestMetadataSignaling?: 'ENABLED'|'DISABLED',
     *     Scte35Esam?: 'INSERT'|'NONE',
     *     Scte35Source?: 'PASSTHROUGH'|'NONE',
     *     TimedMetadata?: 'PASSTHROUGH'|'NONE',
     *     TimedMetadataBoxVersion?: 'VERSION_0'|'VERSION_1',
     *     TimedMetadataSchemeIdUri?: string,
     *     TimedMetadataValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
