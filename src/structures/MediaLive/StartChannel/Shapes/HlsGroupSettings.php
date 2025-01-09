<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ADOBE'|'ELEMENTAL'|'ELEMENTAL_SCTE35'> $AdMarkers
 * @property string $BaseUrlContent
 * @property string $BaseUrlContent1
 * @property string $BaseUrlManifest
 * @property string $BaseUrlManifest1
 * @property list<CaptionLanguageMapping> $CaptionLanguageMappings
 * @property 'INSERT'|'NONE'|'OMIT' $CaptionLanguageSetting
 * @property 'DISABLED'|'ENABLED' $ClientCache
 * @property 'RFC_4281'|'RFC_6381' $CodecSpecification
 * @property string $ConstantIv
 * @property OutputLocationRef $Destination
 * @property 'SINGLE_DIRECTORY'|'SUBDIRECTORY_PER_STREAM' $DirectoryStructure
 * @property 'INSERT'|'NEVER_INSERT' $DiscontinuityTags
 * @property 'AES128'|'SAMPLE_AES' $EncryptionType
 * @property HlsCdnSettings $HlsCdnSettings
 * @property 'DISABLED'|'ENABLED' $HlsId3SegmentTagging
 * @property 'DISABLED'|'STANDARD' $IFrameOnlyPlaylists
 * @property 'AUTO'|'SUPPRESS' $IncompleteSegmentBehavior
 * @property int $IndexNSegments
 * @property 'EMIT_OUTPUT'|'PAUSE_OUTPUT' $InputLossAction
 * @property 'EXCLUDE'|'INCLUDE' $IvInManifest
 * @property 'EXPLICIT'|'FOLLOWS_SEGMENT_NUMBER' $IvSource
 * @property int $KeepSegments
 * @property string $KeyFormat
 * @property string $KeyFormatVersions
 * @property KeyProviderSettings $KeyProviderSettings
 * @property 'GZIP'|'NONE' $ManifestCompression
 * @property 'FLOATING_POINT'|'INTEGER' $ManifestDurationFormat
 * @property int $MinSegmentLength
 * @property 'LIVE'|'VOD' $Mode
 * @property 'MANIFESTS_AND_SEGMENTS'|'SEGMENTS_ONLY'|'VARIANT_MANIFESTS_AND_SEGMENTS' $OutputSelection
 * @property 'EXCLUDE'|'INCLUDE' $ProgramDateTime
 * @property 'INITIALIZE_FROM_OUTPUT_TIMECODE'|'SYSTEM_CLOCK' $ProgramDateTimeClock
 * @property int $ProgramDateTimePeriod
 * @property 'DISABLED'|'ENABLED' $RedundantManifest
 * @property int $SegmentLength
 * @property 'USE_INPUT_SEGMENTATION'|'USE_SEGMENT_DURATION' $SegmentationMode
 * @property int $SegmentsPerSubdirectory
 * @property 'EXCLUDE'|'INCLUDE' $StreamInfResolution
 * @property 'NONE'|'PRIV'|'TDRL' $TimedMetadataId3Frame
 * @property int $TimedMetadataId3Period
 * @property int $TimestampDeltaMilliseconds
 * @property 'SEGMENTED_FILES'|'SINGLE_FILE' $TsFileMode
 */
class HlsGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: list<'ADOBE'|'ELEMENTAL'|'ELEMENTAL_SCTE35'>,
     *     BaseUrlContent?: string,
     *     BaseUrlContent1?: string,
     *     BaseUrlManifest?: string,
     *     BaseUrlManifest1?: string,
     *     CaptionLanguageMappings?: list<CaptionLanguageMapping>,
     *     CaptionLanguageSetting?: 'INSERT'|'NONE'|'OMIT',
     *     ClientCache?: 'DISABLED'|'ENABLED',
     *     CodecSpecification?: 'RFC_4281'|'RFC_6381',
     *     ConstantIv?: string,
     *     Destination: OutputLocationRef,
     *     DirectoryStructure?: 'SINGLE_DIRECTORY'|'SUBDIRECTORY_PER_STREAM',
     *     DiscontinuityTags?: 'INSERT'|'NEVER_INSERT',
     *     EncryptionType?: 'AES128'|'SAMPLE_AES',
     *     HlsCdnSettings?: HlsCdnSettings,
     *     HlsId3SegmentTagging?: 'DISABLED'|'ENABLED',
     *     IFrameOnlyPlaylists?: 'DISABLED'|'STANDARD',
     *     IncompleteSegmentBehavior?: 'AUTO'|'SUPPRESS',
     *     IndexNSegments?: int,
     *     InputLossAction?: 'EMIT_OUTPUT'|'PAUSE_OUTPUT',
     *     IvInManifest?: 'EXCLUDE'|'INCLUDE',
     *     IvSource?: 'EXPLICIT'|'FOLLOWS_SEGMENT_NUMBER',
     *     KeepSegments?: int,
     *     KeyFormat?: string,
     *     KeyFormatVersions?: string,
     *     KeyProviderSettings?: KeyProviderSettings,
     *     ManifestCompression?: 'GZIP'|'NONE',
     *     ManifestDurationFormat?: 'FLOATING_POINT'|'INTEGER',
     *     MinSegmentLength?: int,
     *     Mode?: 'LIVE'|'VOD',
     *     OutputSelection?: 'MANIFESTS_AND_SEGMENTS'|'SEGMENTS_ONLY'|'VARIANT_MANIFESTS_AND_SEGMENTS',
     *     ProgramDateTime?: 'EXCLUDE'|'INCLUDE',
     *     ProgramDateTimeClock?: 'INITIALIZE_FROM_OUTPUT_TIMECODE'|'SYSTEM_CLOCK',
     *     ProgramDateTimePeriod?: int,
     *     RedundantManifest?: 'DISABLED'|'ENABLED',
     *     SegmentLength?: int,
     *     SegmentationMode?: 'USE_INPUT_SEGMENTATION'|'USE_SEGMENT_DURATION',
     *     SegmentsPerSubdirectory?: int,
     *     StreamInfResolution?: 'EXCLUDE'|'INCLUDE',
     *     TimedMetadataId3Frame?: 'NONE'|'PRIV'|'TDRL',
     *     TimedMetadataId3Period?: int,
     *     TimestampDeltaMilliseconds?: int,
     *     TsFileMode?: 'SEGMENTED_FILES'|'SINGLE_FILE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
