<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DashAdditionalManifest>|null $AdditionalManifests
 * @property 'MPEG_CHANNEL_CONFIGURATION'|'DOLBY_CHANNEL_CONFIGURATION'|null $AudioChannelConfigSchemeIdUri
 * @property string|null $BaseUrl
 * @property string|null $DashIFrameTrickPlayNameModifier
 * @property 'BASIC'|'COMPACT'|'DISTINCT'|null $DashManifestStyle
 * @property string|null $Destination
 * @property DestinationSettings|null $DestinationSettings
 * @property DashIsoEncryptionSettings|null $Encryption
 * @property int<1, 2147483647>|null $FragmentLength
 * @property 'HBBTV_1_5'|'NONE'|null $HbbtvCompliance
 * @property 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED'|null $ImageBasedTrickPlay
 * @property DashIsoImageBasedTrickPlaySettings|null $ImageBasedTrickPlaySettings
 * @property int<0, 2147483647>|null $MinBufferTime
 * @property double|null $MinFinalSegmentLength
 * @property 'AVERAGE'|'MAX'|null $MpdManifestBandwidthType
 * @property 'MAIN_PROFILE'|'ON_DEMAND_PROFILE'|null $MpdProfile
 * @property 'ZERO_BASED'|'MATCH_INITIAL_PTS'|null $PtsOffsetHandlingForBFrames
 * @property 'SINGLE_FILE'|'SEGMENTED_FILES'|null $SegmentControl
 * @property int<1, 2147483647>|null $SegmentLength
 * @property 'EXACT'|'GOP_MULTIPLE'|'MATCH'|null $SegmentLengthControl
 * @property 'SIGNED'|'UNSIGNED'|null $VideoCompositionOffsets
 * @property 'ENABLED'|'DISABLED'|null $WriteSegmentTimelineInRepresentation
 */
class DashIsoGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdditionalManifests?: list<DashAdditionalManifest>|null,
     *     AudioChannelConfigSchemeIdUri?: 'MPEG_CHANNEL_CONFIGURATION'|'DOLBY_CHANNEL_CONFIGURATION'|null,
     *     BaseUrl?: string|null,
     *     DashIFrameTrickPlayNameModifier?: string|null,
     *     DashManifestStyle?: 'BASIC'|'COMPACT'|'DISTINCT'|null,
     *     Destination?: string|null,
     *     DestinationSettings?: DestinationSettings|null,
     *     Encryption?: DashIsoEncryptionSettings|null,
     *     FragmentLength?: int<1, 2147483647>|null,
     *     HbbtvCompliance?: 'HBBTV_1_5'|'NONE'|null,
     *     ImageBasedTrickPlay?: 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED'|null,
     *     ImageBasedTrickPlaySettings?: DashIsoImageBasedTrickPlaySettings|null,
     *     MinBufferTime?: int<0, 2147483647>|null,
     *     MinFinalSegmentLength?: double|null,
     *     MpdManifestBandwidthType?: 'AVERAGE'|'MAX'|null,
     *     MpdProfile?: 'MAIN_PROFILE'|'ON_DEMAND_PROFILE'|null,
     *     PtsOffsetHandlingForBFrames?: 'ZERO_BASED'|'MATCH_INITIAL_PTS'|null,
     *     SegmentControl?: 'SINGLE_FILE'|'SEGMENTED_FILES'|null,
     *     SegmentLength?: int<1, 2147483647>|null,
     *     SegmentLengthControl?: 'EXACT'|'GOP_MULTIPLE'|'MATCH'|null,
     *     VideoCompositionOffsets?: 'SIGNED'|'UNSIGNED'|null,
     *     WriteSegmentTimelineInRepresentation?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
