<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CaptionLanguageMapping>|null $CaptionLanguageMappings
 * @property 'DISABLED'|'ENABLED'|null $Id3Behavior
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $KlvBehavior
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $NielsenId3Behavior
 * @property 'NONE'|'SCTE_35_WITHOUT_SEGMENTATION'|null $Scte35Type
 * @property int<1, max>|null $SegmentLength
 * @property 'MILLISECONDS'|'SECONDS'|null $SegmentLengthUnits
 * @property 'NONE'|'PRIV'|'TDRL'|null $TimedMetadataId3Frame
 * @property int<0, 10000>|null $TimedMetadataId3Period
 * @property 'DISABLED'|'ENABLED'|null $TimedMetadataPassthrough
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
     *     SegmentLength?: int<1, max>|null,
     *     SegmentLengthUnits?: 'MILLISECONDS'|'SECONDS'|null,
     *     TimedMetadataId3Frame?: 'NONE'|'PRIV'|'TDRL'|null,
     *     TimedMetadataId3Period?: int<0, 10000>|null,
     *     TimedMetadataPassthrough?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
