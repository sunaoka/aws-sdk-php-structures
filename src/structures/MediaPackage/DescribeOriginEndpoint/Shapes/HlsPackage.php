<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE'|null $AdMarkers
 * @property list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'>|null $AdTriggers
 * @property 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH'|null $AdsOnDeliveryRestrictions
 * @property HlsEncryption|null $Encryption
 * @property bool|null $IncludeDvbSubtitles
 * @property bool|null $IncludeIframeOnlyStream
 * @property 'NONE'|'EVENT'|'VOD'|null $PlaylistType
 * @property int|null $PlaylistWindowSeconds
 * @property int|null $ProgramDateTimeIntervalSeconds
 * @property int|null $SegmentDurationSeconds
 * @property StreamSelection|null $StreamSelection
 * @property bool|null $UseAudioRenditionGroup
 */
class HlsPackage extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE'|null,
     *     AdTriggers?: list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'>|null,
     *     AdsOnDeliveryRestrictions?: 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH'|null,
     *     Encryption?: HlsEncryption|null,
     *     IncludeDvbSubtitles?: bool|null,
     *     IncludeIframeOnlyStream?: bool|null,
     *     PlaylistType?: 'NONE'|'EVENT'|'VOD'|null,
     *     PlaylistWindowSeconds?: int|null,
     *     ProgramDateTimeIntervalSeconds?: int|null,
     *     SegmentDurationSeconds?: int|null,
     *     StreamSelection?: StreamSelection|null,
     *     UseAudioRenditionGroup?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
