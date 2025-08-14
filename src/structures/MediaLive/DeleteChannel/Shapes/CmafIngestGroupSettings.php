<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $NielsenId3Behavior
 * @property 'NONE'|'SCTE_35_WITHOUT_SEGMENTATION'|null $Scte35Type
 * @property int<1, max>|null $SegmentLength
 * @property 'MILLISECONDS'|'SECONDS'|null $SegmentLengthUnits
 * @property int<0, 2000>|null $SendDelayMs
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $KlvBehavior
 * @property string|null $KlvNameModifier
 * @property string|null $NielsenId3NameModifier
 * @property string|null $Scte35NameModifier
 * @property 'DISABLED'|'ENABLED'|null $Id3Behavior
 * @property string|null $Id3NameModifier
 * @property list<CmafIngestCaptionLanguageMapping>|null $CaptionLanguageMappings
 * @property 'NONE'|'PRIV'|'TDRL'|null $TimedMetadataId3Frame
 * @property int<0, 10000>|null $TimedMetadataId3Period
 * @property 'DISABLED'|'ENABLED'|null $TimedMetadataPassthrough
 * @property list<AdditionalDestinations>|null $AdditionalDestinations
 */
class CmafIngestGroupSettings extends Shape
{
    /**
     * @param array{
     *     Destination: OutputLocationRef,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     Scte35Type?: 'NONE'|'SCTE_35_WITHOUT_SEGMENTATION'|null,
     *     SegmentLength?: int<1, max>|null,
     *     SegmentLengthUnits?: 'MILLISECONDS'|'SECONDS'|null,
     *     SendDelayMs?: int<0, 2000>|null,
     *     KlvBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     KlvNameModifier?: string|null,
     *     NielsenId3NameModifier?: string|null,
     *     Scte35NameModifier?: string|null,
     *     Id3Behavior?: 'DISABLED'|'ENABLED'|null,
     *     Id3NameModifier?: string|null,
     *     CaptionLanguageMappings?: list<CmafIngestCaptionLanguageMapping>|null,
     *     TimedMetadataId3Frame?: 'NONE'|'PRIV'|'TDRL'|null,
     *     TimedMetadataId3Period?: int<0, 10000>|null,
     *     TimedMetadataPassthrough?: 'DISABLED'|'ENABLED'|null,
     *     AdditionalDestinations?: list<AdditionalDestinations>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
