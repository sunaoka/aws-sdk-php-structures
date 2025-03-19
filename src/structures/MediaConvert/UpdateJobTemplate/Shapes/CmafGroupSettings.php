<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CmafAdditionalManifest>|null $AdditionalManifests
 * @property string|null $BaseUrl
 * @property 'DISABLED'|'ENABLED'|null $ClientCache
 * @property 'RFC_6381'|'RFC_4281'|null $CodecSpecification
 * @property string|null $DashIFrameTrickPlayNameModifier
 * @property 'BASIC'|'COMPACT'|'DISTINCT'|null $DashManifestStyle
 * @property string|null $Destination
 * @property DestinationSettings|null $DestinationSettings
 * @property CmafEncryptionSettings|null $Encryption
 * @property int<1, 2147483647>|null $FragmentLength
 * @property 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED'|null $ImageBasedTrickPlay
 * @property CmafImageBasedTrickPlaySettings|null $ImageBasedTrickPlaySettings
 * @property 'GZIP'|'NONE'|null $ManifestCompression
 * @property 'FLOATING_POINT'|'INTEGER'|null $ManifestDurationFormat
 * @property int<0, 2147483647>|null $MinBufferTime
 * @property double|null $MinFinalSegmentLength
 * @property 'AVERAGE'|'MAX'|null $MpdManifestBandwidthType
 * @property 'MAIN_PROFILE'|'ON_DEMAND_PROFILE'|null $MpdProfile
 * @property 'ZERO_BASED'|'MATCH_INITIAL_PTS'|null $PtsOffsetHandlingForBFrames
 * @property 'SINGLE_FILE'|'SEGMENTED_FILES'|null $SegmentControl
 * @property int<1, 2147483647>|null $SegmentLength
 * @property 'EXACT'|'GOP_MULTIPLE'|'MATCH'|null $SegmentLengthControl
 * @property 'INCLUDE'|'EXCLUDE'|null $StreamInfResolution
 * @property 'LEGACY'|'SPEC_COMPLIANT'|null $TargetDurationCompatibilityMode
 * @property 'SIGNED'|'UNSIGNED'|null $VideoCompositionOffsets
 * @property 'DISABLED'|'ENABLED'|null $WriteDashManifest
 * @property 'DISABLED'|'ENABLED'|null $WriteHlsManifest
 * @property 'ENABLED'|'DISABLED'|null $WriteSegmentTimelineInRepresentation
 */
class CmafGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdditionalManifests?: list<CmafAdditionalManifest>|null,
     *     BaseUrl?: string|null,
     *     ClientCache?: 'DISABLED'|'ENABLED'|null,
     *     CodecSpecification?: 'RFC_6381'|'RFC_4281'|null,
     *     DashIFrameTrickPlayNameModifier?: string|null,
     *     DashManifestStyle?: 'BASIC'|'COMPACT'|'DISTINCT'|null,
     *     Destination?: string|null,
     *     DestinationSettings?: DestinationSettings|null,
     *     Encryption?: CmafEncryptionSettings|null,
     *     FragmentLength?: int<1, 2147483647>|null,
     *     ImageBasedTrickPlay?: 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED'|null,
     *     ImageBasedTrickPlaySettings?: CmafImageBasedTrickPlaySettings|null,
     *     ManifestCompression?: 'GZIP'|'NONE'|null,
     *     ManifestDurationFormat?: 'FLOATING_POINT'|'INTEGER'|null,
     *     MinBufferTime?: int<0, 2147483647>|null,
     *     MinFinalSegmentLength?: double|null,
     *     MpdManifestBandwidthType?: 'AVERAGE'|'MAX'|null,
     *     MpdProfile?: 'MAIN_PROFILE'|'ON_DEMAND_PROFILE'|null,
     *     PtsOffsetHandlingForBFrames?: 'ZERO_BASED'|'MATCH_INITIAL_PTS'|null,
     *     SegmentControl?: 'SINGLE_FILE'|'SEGMENTED_FILES'|null,
     *     SegmentLength?: int<1, 2147483647>|null,
     *     SegmentLengthControl?: 'EXACT'|'GOP_MULTIPLE'|'MATCH'|null,
     *     StreamInfResolution?: 'INCLUDE'|'EXCLUDE'|null,
     *     TargetDurationCompatibilityMode?: 'LEGACY'|'SPEC_COMPLIANT'|null,
     *     VideoCompositionOffsets?: 'SIGNED'|'UNSIGNED'|null,
     *     WriteDashManifest?: 'DISABLED'|'ENABLED'|null,
     *     WriteHlsManifest?: 'DISABLED'|'ENABLED'|null,
     *     WriteSegmentTimelineInRepresentation?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
