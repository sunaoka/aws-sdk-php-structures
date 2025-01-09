<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUDE'|'EXCLUDE' $AccessibilityCaptionHints
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION' $AudioDuration
 * @property 'RAW'|'FRAGMENTED_MP4' $CaptionContainerType
 * @property 'NONE'|'PASSTHROUGH' $KlvMetadata
 * @property 'ENABLED'|'DISABLED' $ManifestMetadataSignaling
 * @property 'INSERT'|'NONE' $Scte35Esam
 * @property 'PASSTHROUGH'|'NONE' $Scte35Source
 * @property 'PASSTHROUGH'|'NONE' $TimedMetadata
 * @property 'VERSION_0'|'VERSION_1' $TimedMetadataBoxVersion
 * @property string $TimedMetadataSchemeIdUri
 * @property string $TimedMetadataValue
 */
class MpdSettings extends Shape
{
    /**
     * @param array{
     *     AccessibilityCaptionHints?: 'INCLUDE'|'EXCLUDE',
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION',
     *     CaptionContainerType?: 'RAW'|'FRAGMENTED_MP4',
     *     KlvMetadata?: 'NONE'|'PASSTHROUGH',
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
