<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ADOBE'|'ELEMENTAL'|'ELEMENTAL_SCTE35'>|null $AdMarkers
 * @property string|null $BaseUrlContent
 * @property string|null $BaseUrlContent1
 * @property string|null $BaseUrlManifest
 * @property string|null $BaseUrlManifest1
 * @property list<CaptionLanguageMapping>|null $CaptionLanguageMappings
 * @property 'INSERT'|'NONE'|'OMIT'|null $CaptionLanguageSetting
 * @property 'DISABLED'|'ENABLED'|null $ClientCache
 * @property 'RFC_4281'|'RFC_6381'|null $CodecSpecification
 * @property string|null $ConstantIv
 * @property OutputLocationRef $Destination
 * @property 'SINGLE_DIRECTORY'|'SUBDIRECTORY_PER_STREAM'|null $DirectoryStructure
 * @property 'INSERT'|'NEVER_INSERT'|null $DiscontinuityTags
 * @property 'AES128'|'SAMPLE_AES'|null $EncryptionType
 * @property HlsCdnSettings|null $HlsCdnSettings
 * @property 'DISABLED'|'ENABLED'|null $HlsId3SegmentTagging
 * @property 'DISABLED'|'STANDARD'|null $IFrameOnlyPlaylists
 * @property 'AUTO'|'SUPPRESS'|null $IncompleteSegmentBehavior
 * @property int|null $IndexNSegments
 * @property 'EMIT_OUTPUT'|'PAUSE_OUTPUT'|null $InputLossAction
 * @property 'EXCLUDE'|'INCLUDE'|null $IvInManifest
 * @property 'EXPLICIT'|'FOLLOWS_SEGMENT_NUMBER'|null $IvSource
 * @property int|null $KeepSegments
 * @property string|null $KeyFormat
 * @property string|null $KeyFormatVersions
 * @property KeyProviderSettings|null $KeyProviderSettings
 * @property 'GZIP'|'NONE'|null $ManifestCompression
 * @property 'FLOATING_POINT'|'INTEGER'|null $ManifestDurationFormat
 * @property int|null $MinSegmentLength
 * @property 'LIVE'|'VOD'|null $Mode
 * @property 'MANIFESTS_AND_SEGMENTS'|'SEGMENTS_ONLY'|'VARIANT_MANIFESTS_AND_SEGMENTS'|null $OutputSelection
 * @property 'EXCLUDE'|'INCLUDE'|null $ProgramDateTime
 * @property 'INITIALIZE_FROM_OUTPUT_TIMECODE'|'SYSTEM_CLOCK'|null $ProgramDateTimeClock
 * @property int|null $ProgramDateTimePeriod
 * @property 'DISABLED'|'ENABLED'|null $RedundantManifest
 * @property int|null $SegmentLength
 * @property 'USE_INPUT_SEGMENTATION'|'USE_SEGMENT_DURATION'|null $SegmentationMode
 * @property int|null $SegmentsPerSubdirectory
 * @property 'EXCLUDE'|'INCLUDE'|null $StreamInfResolution
 * @property 'NONE'|'PRIV'|'TDRL'|null $TimedMetadataId3Frame
 * @property int|null $TimedMetadataId3Period
 * @property int|null $TimestampDeltaMilliseconds
 * @property 'SEGMENTED_FILES'|'SINGLE_FILE'|null $TsFileMode
 */
class HlsGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: list<'ADOBE'|'ELEMENTAL'|'ELEMENTAL_SCTE35'>|null,
     *     BaseUrlContent?: string|null,
     *     BaseUrlContent1?: string|null,
     *     BaseUrlManifest?: string|null,
     *     BaseUrlManifest1?: string|null,
     *     CaptionLanguageMappings?: list<CaptionLanguageMapping>|null,
     *     CaptionLanguageSetting?: 'INSERT'|'NONE'|'OMIT'|null,
     *     ClientCache?: 'DISABLED'|'ENABLED'|null,
     *     CodecSpecification?: 'RFC_4281'|'RFC_6381'|null,
     *     ConstantIv?: string|null,
     *     Destination: OutputLocationRef,
     *     DirectoryStructure?: 'SINGLE_DIRECTORY'|'SUBDIRECTORY_PER_STREAM'|null,
     *     DiscontinuityTags?: 'INSERT'|'NEVER_INSERT'|null,
     *     EncryptionType?: 'AES128'|'SAMPLE_AES'|null,
     *     HlsCdnSettings?: HlsCdnSettings|null,
     *     HlsId3SegmentTagging?: 'DISABLED'|'ENABLED'|null,
     *     IFrameOnlyPlaylists?: 'DISABLED'|'STANDARD'|null,
     *     IncompleteSegmentBehavior?: 'AUTO'|'SUPPRESS'|null,
     *     IndexNSegments?: int|null,
     *     InputLossAction?: 'EMIT_OUTPUT'|'PAUSE_OUTPUT'|null,
     *     IvInManifest?: 'EXCLUDE'|'INCLUDE'|null,
     *     IvSource?: 'EXPLICIT'|'FOLLOWS_SEGMENT_NUMBER'|null,
     *     KeepSegments?: int|null,
     *     KeyFormat?: string|null,
     *     KeyFormatVersions?: string|null,
     *     KeyProviderSettings?: KeyProviderSettings|null,
     *     ManifestCompression?: 'GZIP'|'NONE'|null,
     *     ManifestDurationFormat?: 'FLOATING_POINT'|'INTEGER'|null,
     *     MinSegmentLength?: int|null,
     *     Mode?: 'LIVE'|'VOD'|null,
     *     OutputSelection?: 'MANIFESTS_AND_SEGMENTS'|'SEGMENTS_ONLY'|'VARIANT_MANIFESTS_AND_SEGMENTS'|null,
     *     ProgramDateTime?: 'EXCLUDE'|'INCLUDE'|null,
     *     ProgramDateTimeClock?: 'INITIALIZE_FROM_OUTPUT_TIMECODE'|'SYSTEM_CLOCK'|null,
     *     ProgramDateTimePeriod?: int|null,
     *     RedundantManifest?: 'DISABLED'|'ENABLED'|null,
     *     SegmentLength?: int|null,
     *     SegmentationMode?: 'USE_INPUT_SEGMENTATION'|'USE_SEGMENT_DURATION'|null,
     *     SegmentsPerSubdirectory?: int|null,
     *     StreamInfResolution?: 'EXCLUDE'|'INCLUDE'|null,
     *     TimedMetadataId3Frame?: 'NONE'|'PRIV'|'TDRL'|null,
     *     TimedMetadataId3Period?: int|null,
     *     TimestampDeltaMilliseconds?: int|null,
     *     TsFileMode?: 'SEGMENTED_FILES'|'SINGLE_FILE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
