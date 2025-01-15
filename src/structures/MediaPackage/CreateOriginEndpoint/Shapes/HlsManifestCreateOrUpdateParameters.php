<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE'|null $AdMarkers
 * @property list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'>|null $AdTriggers
 * @property 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH'|null $AdsOnDeliveryRestrictions
 * @property string $Id
 * @property bool|null $IncludeIframeOnlyStream
 * @property string|null $ManifestName
 * @property 'NONE'|'EVENT'|'VOD'|null $PlaylistType
 * @property int|null $PlaylistWindowSeconds
 * @property int|null $ProgramDateTimeIntervalSeconds
 */
class HlsManifestCreateOrUpdateParameters extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE'|null,
     *     AdTriggers?: list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'>|null,
     *     AdsOnDeliveryRestrictions?: 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH'|null,
     *     Id: string,
     *     IncludeIframeOnlyStream?: bool|null,
     *     ManifestName?: string|null,
     *     PlaylistType?: 'NONE'|'EVENT'|'VOD'|null,
     *     PlaylistWindowSeconds?: int|null,
     *     ProgramDateTimeIntervalSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
