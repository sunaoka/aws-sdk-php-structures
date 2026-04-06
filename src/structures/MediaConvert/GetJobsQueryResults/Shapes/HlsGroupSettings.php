<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ELEMENTAL'|'ELEMENTAL_SCTE35'>|null $AdMarkers
 * @property list<HlsAdditionalManifest>|null $AdditionalManifests
 * @property 'INCLUDE'|'EXCLUDE'|null $AudioOnlyHeader
 * @property string|null $BaseUrl
 * @property list<HlsCaptionLanguageMapping>|null $CaptionLanguageMappings
 * @property 'INSERT'|'OMIT'|'NONE'|null $CaptionLanguageSetting
 * @property 'LARGE_SEGMENTS'|'MATCH_VIDEO'|null $CaptionSegmentLengthControl
 * @property 'DISABLED'|'ENABLED'|null $ClientCache
 * @property 'RFC_6381'|'RFC_4281'|null $CodecSpecification
 * @property string|null $Destination
 * @property DestinationSettings|null $DestinationSettings
 * @property 'SINGLE_DIRECTORY'|'SUBDIRECTORY_PER_STREAM'|null $DirectoryStructure
 * @property HlsEncryptionSettings|null $Encryption
 * @property 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED'|null $ImageBasedTrickPlay
 * @property HlsImageBasedTrickPlaySettings|null $ImageBasedTrickPlaySettings
 * @property 'GZIP'|'NONE'|null $ManifestCompression
 * @property 'FLOATING_POINT'|'INTEGER'|null $ManifestDurationFormat
 * @property double|null $MinFinalSegmentLength
 * @property int<0, 2147483647>|null $MinSegmentLength
 * @property 'MANIFESTS_AND_SEGMENTS'|'SEGMENTS_ONLY'|null $OutputSelection
 * @property 'INCLUDE'|'EXCLUDE'|null $ProgramDateTime
 * @property int<0, 3600>|null $ProgramDateTimePeriod
 * @property 'ENABLED'|'DISABLED'|null $ProgressiveWriteHlsManifest
 * @property 'SINGLE_FILE'|'SEGMENTED_FILES'|null $SegmentControl
 * @property int<1, 2147483647>|null $SegmentLength
 * @property 'EXACT'|'GOP_MULTIPLE'|'MATCH'|null $SegmentLengthControl
 * @property int<1, 2147483647>|null $SegmentsPerSubdirectory
 * @property 'INCLUDE'|'EXCLUDE'|null $StreamInfResolution
 * @property 'LEGACY'|'SPEC_COMPLIANT'|null $TargetDurationCompatibilityMode
 * @property 'NONE'|'PRIV'|'TDRL'|null $TimedMetadataId3Frame
 * @property int<-2147483648, 2147483647>|null $TimedMetadataId3Period
 * @property int<-2147483648, 2147483647>|null $TimestampDeltaMilliseconds
 */
class HlsGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: list<'ELEMENTAL'|'ELEMENTAL_SCTE35'>|null,
     *     AdditionalManifests?: list<HlsAdditionalManifest>|null,
     *     AudioOnlyHeader?: 'INCLUDE'|'EXCLUDE'|null,
     *     BaseUrl?: string|null,
     *     CaptionLanguageMappings?: list<HlsCaptionLanguageMapping>|null,
     *     CaptionLanguageSetting?: 'INSERT'|'OMIT'|'NONE'|null,
     *     CaptionSegmentLengthControl?: 'LARGE_SEGMENTS'|'MATCH_VIDEO'|null,
     *     ClientCache?: 'DISABLED'|'ENABLED'|null,
     *     CodecSpecification?: 'RFC_6381'|'RFC_4281'|null,
     *     Destination?: string|null,
     *     DestinationSettings?: DestinationSettings|null,
     *     DirectoryStructure?: 'SINGLE_DIRECTORY'|'SUBDIRECTORY_PER_STREAM'|null,
     *     Encryption?: HlsEncryptionSettings|null,
     *     ImageBasedTrickPlay?: 'NONE'|'THUMBNAIL'|'THUMBNAIL_AND_FULLFRAME'|'ADVANCED'|null,
     *     ImageBasedTrickPlaySettings?: HlsImageBasedTrickPlaySettings|null,
     *     ManifestCompression?: 'GZIP'|'NONE'|null,
     *     ManifestDurationFormat?: 'FLOATING_POINT'|'INTEGER'|null,
     *     MinFinalSegmentLength?: double|null,
     *     MinSegmentLength?: int<0, 2147483647>|null,
     *     OutputSelection?: 'MANIFESTS_AND_SEGMENTS'|'SEGMENTS_ONLY'|null,
     *     ProgramDateTime?: 'INCLUDE'|'EXCLUDE'|null,
     *     ProgramDateTimePeriod?: int<0, 3600>|null,
     *     ProgressiveWriteHlsManifest?: 'ENABLED'|'DISABLED'|null,
     *     SegmentControl?: 'SINGLE_FILE'|'SEGMENTED_FILES'|null,
     *     SegmentLength?: int<1, 2147483647>|null,
     *     SegmentLengthControl?: 'EXACT'|'GOP_MULTIPLE'|'MATCH'|null,
     *     SegmentsPerSubdirectory?: int<1, 2147483647>|null,
     *     StreamInfResolution?: 'INCLUDE'|'EXCLUDE'|null,
     *     TargetDurationCompatibilityMode?: 'LEGACY'|'SPEC_COMPLIANT'|null,
     *     TimedMetadataId3Frame?: 'NONE'|'PRIV'|'TDRL'|null,
     *     TimedMetadataId3Period?: int<-2147483648, 2147483647>|null,
     *     TimestampDeltaMilliseconds?: int<-2147483648, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
