<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null $AudioDuration
 * @property string|null $AudioGroupId
 * @property string|null $AudioRenditionSets
 * @property 'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM'|null $AudioTrackType
 * @property 'INCLUDE'|'EXCLUDE'|null $C2paManifest
 * @property string|null $CertificateSecret
 * @property 'DONT_FLAG'|'FLAG'|null $DescriptiveVideoServiceFlag
 * @property 'INCLUDE'|'EXCLUDE'|null $IFrameOnlyManifest
 * @property 'PASSTHROUGH'|'NONE'|null $KlvMetadata
 * @property 'ENABLED'|'DISABLED'|null $ManifestMetadataSignaling
 * @property 'INSERT'|'NONE'|null $Scte35Esam
 * @property 'PASSTHROUGH'|'NONE'|null $Scte35Source
 * @property string|null $SigningKmsKey
 * @property 'PASSTHROUGH'|'NONE'|null $TimedMetadata
 * @property 'VERSION_0'|'VERSION_1'|null $TimedMetadataBoxVersion
 * @property string|null $TimedMetadataSchemeIdUri
 * @property string|null $TimedMetadataValue
 */
class CmfcSettings extends Shape
{
    /**
     * @param array{
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null,
     *     AudioGroupId?: string|null,
     *     AudioRenditionSets?: string|null,
     *     AudioTrackType?: 'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT'|'ALTERNATE_AUDIO_AUTO_SELECT'|'ALTERNATE_AUDIO_NOT_AUTO_SELECT'|'AUDIO_ONLY_VARIANT_STREAM'|null,
     *     C2paManifest?: 'INCLUDE'|'EXCLUDE'|null,
     *     CertificateSecret?: string|null,
     *     DescriptiveVideoServiceFlag?: 'DONT_FLAG'|'FLAG'|null,
     *     IFrameOnlyManifest?: 'INCLUDE'|'EXCLUDE'|null,
     *     KlvMetadata?: 'PASSTHROUGH'|'NONE'|null,
     *     ManifestMetadataSignaling?: 'ENABLED'|'DISABLED'|null,
     *     Scte35Esam?: 'INSERT'|'NONE'|null,
     *     Scte35Source?: 'PASSTHROUGH'|'NONE'|null,
     *     SigningKmsKey?: string|null,
     *     TimedMetadata?: 'PASSTHROUGH'|'NONE'|null,
     *     TimedMetadataBoxVersion?: 'VERSION_0'|'VERSION_1'|null,
     *     TimedMetadataSchemeIdUri?: string|null,
     *     TimedMetadataValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
