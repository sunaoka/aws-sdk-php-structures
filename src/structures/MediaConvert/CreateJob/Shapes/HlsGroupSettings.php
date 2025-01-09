<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ELEMENTAL'|'ELEMENTAL_SCTE35'> $AdMarkers
 * @property list<HlsAdditionalManifest> $AdditionalManifests
 * @property 'INCLUDE'|'EXCLUDE' $AudioOnlyHeader
 * @property string $BaseUrl
 * @property list<HlsCaptionLanguageMapping> $CaptionLanguageMappings
 * @property 'INSERT'|'OMIT'|'NONE' $CaptionLanguageSetting
 * @property 'LARGE_SEGMENTS'|'MATCH_VIDEO' $CaptionSegmentLengthControl
 * @property 'DISABLED'|'ENABLED' $ClientCache
 * @property 'RFC_6381'|'RFC_4281' $CodecSpecification
 * @property string $Destination
 * @property DestinationSettings $DestinationSettings
 * @property 'SINGLE_DIRECTORY'|'SUBDIRECTORY_PER_STREAM' $DirectoryStructure
 * @property HlsEncryptionSettings $Encryption
 * @property 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED' $ImageBasedTrickPlay
 * @property HlsImageBasedTrickPlaySettings $ImageBasedTrickPlaySettings
 * @property 'GZIP'|'NONE' $ManifestCompression
 * @property 'FLOATING_POINT'|'INTEGER' $ManifestDurationFormat
 * @property double $MinFinalSegmentLength
 * @property int<0, 2147483647> $MinSegmentLength
 * @property 'MANIFESTS_AND_SEGMENTS'|'SEGMENTS_ONLY' $OutputSelection
 * @property 'INCLUDE'|'EXCLUDE' $ProgramDateTime
 * @property int<0, 3600> $ProgramDateTimePeriod
 * @property 'ENABLED'|'DISABLED' $ProgressiveWriteHlsManifest
 * @property 'SINGLE_FILE'|'SEGMENTED_FILES' $SegmentControl
 * @property int<1, 2147483647> $SegmentLength
 * @property 'EXACT'|'GOP_MULTIPLE' $SegmentLengthControl
 * @property int<1, 2147483647> $SegmentsPerSubdirectory
 * @property 'INCLUDE'|'EXCLUDE' $StreamInfResolution
 * @property 'LEGACY'|'SPEC_COMPLIANT' $TargetDurationCompatibilityMode
 * @property 'NONE'|'PRIV'|'TDRL' $TimedMetadataId3Frame
 * @property int<-2147483648, 2147483647> $TimedMetadataId3Period
 * @property int<-2147483648, 2147483647> $TimestampDeltaMilliseconds
 */
class HlsGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: list<'ELEMENTAL'|'ELEMENTAL_SCTE35'>,
     *     AdditionalManifests?: list<HlsAdditionalManifest>,
     *     AudioOnlyHeader?: 'INCLUDE'|'EXCLUDE',
     *     BaseUrl?: string,
     *     CaptionLanguageMappings?: list<HlsCaptionLanguageMapping>,
     *     CaptionLanguageSetting?: 'INSERT'|'OMIT'|'NONE',
     *     CaptionSegmentLengthControl?: 'LARGE_SEGMENTS'|'MATCH_VIDEO',
     *     ClientCache?: 'DISABLED'|'ENABLED',
     *     CodecSpecification?: 'RFC_6381'|'RFC_4281',
     *     Destination?: string,
     *     DestinationSettings?: DestinationSettings,
     *     DirectoryStructure?: 'SINGLE_DIRECTORY'|'SUBDIRECTORY_PER_STREAM',
     *     Encryption?: HlsEncryptionSettings,
     *     ImageBasedTrickPlay?: 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED',
     *     ImageBasedTrickPlaySettings?: HlsImageBasedTrickPlaySettings,
     *     ManifestCompression?: 'GZIP'|'NONE',
     *     ManifestDurationFormat?: 'FLOATING_POINT'|'INTEGER',
     *     MinFinalSegmentLength?: double,
     *     MinSegmentLength?: int<0, 2147483647>,
     *     OutputSelection?: 'MANIFESTS_AND_SEGMENTS'|'SEGMENTS_ONLY',
     *     ProgramDateTime?: 'INCLUDE'|'EXCLUDE',
     *     ProgramDateTimePeriod?: int<0, 3600>,
     *     ProgressiveWriteHlsManifest?: 'ENABLED'|'DISABLED',
     *     SegmentControl?: 'SINGLE_FILE'|'SEGMENTED_FILES',
     *     SegmentLength?: int<1, 2147483647>,
     *     SegmentLengthControl?: 'EXACT'|'GOP_MULTIPLE',
     *     SegmentsPerSubdirectory?: int<1, 2147483647>,
     *     StreamInfResolution?: 'INCLUDE'|'EXCLUDE',
     *     TargetDurationCompatibilityMode?: 'LEGACY'|'SPEC_COMPLIANT',
     *     TimedMetadataId3Frame?: 'NONE'|'PRIV'|'TDRL',
     *     TimedMetadataId3Period?: int<-2147483648, 2147483647>,
     *     TimestampDeltaMilliseconds?: int<-2147483648, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
