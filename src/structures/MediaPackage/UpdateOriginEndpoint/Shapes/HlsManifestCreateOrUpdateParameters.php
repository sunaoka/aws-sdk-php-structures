<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE' $AdMarkers
 * @property list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'> $AdTriggers
 * @property 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH' $AdsOnDeliveryRestrictions
 * @property string $Id
 * @property bool $IncludeIframeOnlyStream
 * @property string $ManifestName
 * @property 'NONE'|'EVENT'|'VOD' $PlaylistType
 * @property int $PlaylistWindowSeconds
 * @property int $ProgramDateTimeIntervalSeconds
 */
class HlsManifestCreateOrUpdateParameters extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE',
     *     AdTriggers?: list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'>,
     *     AdsOnDeliveryRestrictions?: 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH',
     *     Id: string,
     *     IncludeIframeOnlyStream?: bool,
     *     ManifestName?: string,
     *     PlaylistType?: 'NONE'|'EVENT'|'VOD',
     *     PlaylistWindowSeconds?: int,
     *     ProgramDateTimeIntervalSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
