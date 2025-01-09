<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CmafAdditionalManifest> $AdditionalManifests
 * @property string $BaseUrl
 * @property 'DISABLED'|'ENABLED' $ClientCache
 * @property 'RFC_6381'|'RFC_4281' $CodecSpecification
 * @property string $DashIFrameTrickPlayNameModifier
 * @property 'BASIC'|'COMPACT'|'DISTINCT' $DashManifestStyle
 * @property string $Destination
 * @property DestinationSettings $DestinationSettings
 * @property CmafEncryptionSettings $Encryption
 * @property int<1, 2147483647> $FragmentLength
 * @property 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED' $ImageBasedTrickPlay
 * @property CmafImageBasedTrickPlaySettings $ImageBasedTrickPlaySettings
 * @property 'GZIP'|'NONE' $ManifestCompression
 * @property 'FLOATING_POINT'|'INTEGER' $ManifestDurationFormat
 * @property int<0, 2147483647> $MinBufferTime
 * @property double $MinFinalSegmentLength
 * @property 'AVERAGE'|'MAX' $MpdManifestBandwidthType
 * @property 'MAIN_PROFILE'|'ON_DEMAND_PROFILE' $MpdProfile
 * @property 'ZERO_BASED'|'MATCH_INITIAL_PTS' $PtsOffsetHandlingForBFrames
 * @property 'SINGLE_FILE'|'SEGMENTED_FILES' $SegmentControl
 * @property int<1, 2147483647> $SegmentLength
 * @property 'EXACT'|'GOP_MULTIPLE' $SegmentLengthControl
 * @property 'INCLUDE'|'EXCLUDE' $StreamInfResolution
 * @property 'LEGACY'|'SPEC_COMPLIANT' $TargetDurationCompatibilityMode
 * @property 'SIGNED'|'UNSIGNED' $VideoCompositionOffsets
 * @property 'DISABLED'|'ENABLED' $WriteDashManifest
 * @property 'DISABLED'|'ENABLED' $WriteHlsManifest
 * @property 'ENABLED'|'DISABLED' $WriteSegmentTimelineInRepresentation
 */
class CmafGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdditionalManifests?: list<CmafAdditionalManifest>,
     *     BaseUrl?: string,
     *     ClientCache?: 'DISABLED'|'ENABLED',
     *     CodecSpecification?: 'RFC_6381'|'RFC_4281',
     *     DashIFrameTrickPlayNameModifier?: string,
     *     DashManifestStyle?: 'BASIC'|'COMPACT'|'DISTINCT',
     *     Destination?: string,
     *     DestinationSettings?: DestinationSettings,
     *     Encryption?: CmafEncryptionSettings,
     *     FragmentLength?: int<1, 2147483647>,
     *     ImageBasedTrickPlay?: 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED',
     *     ImageBasedTrickPlaySettings?: CmafImageBasedTrickPlaySettings,
     *     ManifestCompression?: 'GZIP'|'NONE',
     *     ManifestDurationFormat?: 'FLOATING_POINT'|'INTEGER',
     *     MinBufferTime?: int<0, 2147483647>,
     *     MinFinalSegmentLength?: double,
     *     MpdManifestBandwidthType?: 'AVERAGE'|'MAX',
     *     MpdProfile?: 'MAIN_PROFILE'|'ON_DEMAND_PROFILE',
     *     PtsOffsetHandlingForBFrames?: 'ZERO_BASED'|'MATCH_INITIAL_PTS',
     *     SegmentControl?: 'SINGLE_FILE'|'SEGMENTED_FILES',
     *     SegmentLength?: int<1, 2147483647>,
     *     SegmentLengthControl?: 'EXACT'|'GOP_MULTIPLE',
     *     StreamInfResolution?: 'INCLUDE'|'EXCLUDE',
     *     TargetDurationCompatibilityMode?: 'LEGACY'|'SPEC_COMPLIANT',
     *     VideoCompositionOffsets?: 'SIGNED'|'UNSIGNED',
     *     WriteDashManifest?: 'DISABLED'|'ENABLED',
     *     WriteHlsManifest?: 'DISABLED'|'ENABLED',
     *     WriteSegmentTimelineInRepresentation?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
