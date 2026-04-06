<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CaptionLanguageMapping>|null $CaptionLanguageMappings
 * @property 'DISABLED'|'ENABLED'|null $Id3Behavior
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $KlvBehavior
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $NielsenId3Behavior
 * @property 'NONE'|'SCTE_35_WITHOUT_SEGMENTATION'|null $Scte35Type
 * @property int|null $SegmentLength
 * @property 'MILLISECONDS'|'SECONDS'|null $SegmentLengthUnits
 * @property 'NONE'|'PRIV'|'TDRL'|null $TimedMetadataId3Frame
 * @property int|null $TimedMetadataId3Period
 * @property 'DISABLED'|'ENABLED'|null $TimedMetadataPassthrough
 * @property list<MediaPackageAdditionalDestinations>|null $AdditionalDestinations
 */
class MediaPackageV2GroupSettings extends Shape
{
    /**
     * @param array{
     *     CaptionLanguageMappings?: list<CaptionLanguageMapping>|null,
     *     Id3Behavior?: 'DISABLED'|'ENABLED'|null,
     *     KlvBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     Scte35Type?: 'NONE'|'SCTE_35_WITHOUT_SEGMENTATION'|null,
     *     SegmentLength?: int|null,
     *     SegmentLengthUnits?: 'MILLISECONDS'|'SECONDS'|null,
     *     TimedMetadataId3Frame?: 'NONE'|'PRIV'|'TDRL'|null,
     *     TimedMetadataId3Period?: int|null,
     *     TimedMetadataPassthrough?: 'DISABLED'|'ENABLED'|null,
     *     AdditionalDestinations?: list<MediaPackageAdditionalDestinations>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
