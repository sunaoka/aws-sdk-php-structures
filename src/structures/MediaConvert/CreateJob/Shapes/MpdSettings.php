<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUDE'|'EXCLUDE'|null $AccessibilityCaptionHints
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null $AudioDuration
 * @property 'INCLUDE'|'EXCLUDE'|null $C2paManifest
 * @property 'RAW'|'FRAGMENTED_MP4'|null $CaptionContainerType
 * @property string|null $CertificateSecret
 * @property 'NONE'|'PASSTHROUGH'|null $KlvMetadata
 * @property 'ENABLED'|'DISABLED'|null $ManifestMetadataSignaling
 * @property 'INSERT'|'NONE'|null $Scte35Esam
 * @property 'PASSTHROUGH'|'NONE'|null $Scte35Source
 * @property string|null $SigningKmsKey
 * @property 'PASSTHROUGH'|'NONE'|null $TimedMetadata
 * @property 'VERSION_0'|'VERSION_1'|null $TimedMetadataBoxVersion
 * @property string|null $TimedMetadataSchemeIdUri
 * @property string|null $TimedMetadataValue
 */
class MpdSettings extends Shape
{
    /**
     * @param array{
     *     AccessibilityCaptionHints?: 'INCLUDE'|'EXCLUDE'|null,
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null,
     *     C2paManifest?: 'INCLUDE'|'EXCLUDE'|null,
     *     CaptionContainerType?: 'RAW'|'FRAGMENTED_MP4'|null,
     *     CertificateSecret?: string|null,
     *     KlvMetadata?: 'NONE'|'PASSTHROUGH'|null,
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
