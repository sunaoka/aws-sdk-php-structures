<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE' $AdMarkers
 * @property list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'> $AdTriggers
 * @property 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH' $AdsOnDeliveryRestrictions
 * @property HlsEncryption $Encryption
 * @property bool $IncludeDvbSubtitles
 * @property bool $IncludeIframeOnlyStream
 * @property 'NONE'|'EVENT'|'VOD' $PlaylistType
 * @property int $PlaylistWindowSeconds
 * @property int $ProgramDateTimeIntervalSeconds
 * @property int $SegmentDurationSeconds
 * @property StreamSelection $StreamSelection
 * @property bool $UseAudioRenditionGroup
 */
class HlsPackage extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE',
     *     AdTriggers?: list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'>,
     *     AdsOnDeliveryRestrictions?: 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH',
     *     Encryption?: HlsEncryption,
     *     IncludeDvbSubtitles?: bool,
     *     IncludeIframeOnlyStream?: bool,
     *     PlaylistType?: 'NONE'|'EVENT'|'VOD',
     *     PlaylistWindowSeconds?: int,
     *     ProgramDateTimeIntervalSeconds?: int,
     *     SegmentDurationSeconds?: int,
     *     StreamSelection?: StreamSelection,
     *     UseAudioRenditionGroup?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
