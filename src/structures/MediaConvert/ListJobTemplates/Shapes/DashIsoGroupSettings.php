<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DashAdditionalManifest> $AdditionalManifests
 * @property 'MPEG_CHANNEL_CONFIGURATION'|'DOLBY_CHANNEL_CONFIGURATION' $AudioChannelConfigSchemeIdUri
 * @property string $BaseUrl
 * @property string $DashIFrameTrickPlayNameModifier
 * @property 'BASIC'|'COMPACT'|'DISTINCT' $DashManifestStyle
 * @property string $Destination
 * @property DestinationSettings $DestinationSettings
 * @property DashIsoEncryptionSettings $Encryption
 * @property int $FragmentLength
 * @property 'HBBTV_1_5'|'NONE' $HbbtvCompliance
 * @property 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED' $ImageBasedTrickPlay
 * @property DashIsoImageBasedTrickPlaySettings $ImageBasedTrickPlaySettings
 * @property int $MinBufferTime
 * @property double $MinFinalSegmentLength
 * @property 'AVERAGE'|'MAX' $MpdManifestBandwidthType
 * @property 'MAIN_PROFILE'|'ON_DEMAND_PROFILE' $MpdProfile
 * @property 'ZERO_BASED'|'MATCH_INITIAL_PTS' $PtsOffsetHandlingForBFrames
 * @property 'SINGLE_FILE'|'SEGMENTED_FILES' $SegmentControl
 * @property int $SegmentLength
 * @property 'EXACT'|'GOP_MULTIPLE' $SegmentLengthControl
 * @property 'SIGNED'|'UNSIGNED' $VideoCompositionOffsets
 * @property 'ENABLED'|'DISABLED' $WriteSegmentTimelineInRepresentation
 */
class DashIsoGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdditionalManifests?: list<DashAdditionalManifest>,
     *     AudioChannelConfigSchemeIdUri?: 'MPEG_CHANNEL_CONFIGURATION'|'DOLBY_CHANNEL_CONFIGURATION',
     *     BaseUrl?: string,
     *     DashIFrameTrickPlayNameModifier?: string,
     *     DashManifestStyle?: 'BASIC'|'COMPACT'|'DISTINCT',
     *     Destination?: string,
     *     DestinationSettings?: DestinationSettings,
     *     Encryption?: DashIsoEncryptionSettings,
     *     FragmentLength?: int,
     *     HbbtvCompliance?: 'HBBTV_1_5'|'NONE',
     *     ImageBasedTrickPlay?: 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED',
     *     ImageBasedTrickPlaySettings?: DashIsoImageBasedTrickPlaySettings,
     *     MinBufferTime?: int,
     *     MinFinalSegmentLength?: double,
     *     MpdManifestBandwidthType?: 'AVERAGE'|'MAX',
     *     MpdProfile?: 'MAIN_PROFILE'|'ON_DEMAND_PROFILE',
     *     PtsOffsetHandlingForBFrames?: 'ZERO_BASED'|'MATCH_INITIAL_PTS',
     *     SegmentControl?: 'SINGLE_FILE'|'SEGMENTED_FILES',
     *     SegmentLength?: int,
     *     SegmentLengthControl?: 'EXACT'|'GOP_MULTIPLE',
     *     VideoCompositionOffsets?: 'SIGNED'|'UNSIGNED',
     *     WriteSegmentTimelineInRepresentation?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
