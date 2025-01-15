<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListOriginEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'>|null $AdTriggers
 * @property 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH'|null $AdsOnDeliveryRestrictions
 * @property DashEncryption|null $Encryption
 * @property bool|null $IncludeIframeOnlyStream
 * @property 'FULL'|'COMPACT'|'DRM_TOP_LEVEL_COMPACT'|null $ManifestLayout
 * @property int|null $ManifestWindowSeconds
 * @property int|null $MinBufferTimeSeconds
 * @property int|null $MinUpdatePeriodSeconds
 * @property list<'ADS'>|null $PeriodTriggers
 * @property 'NONE'|'HBBTV_1_5'|'HYBRIDCAST'|'DVB_DASH_2014'|null $Profile
 * @property int|null $SegmentDurationSeconds
 * @property 'NUMBER_WITH_TIMELINE'|'TIME_WITH_TIMELINE'|'NUMBER_WITH_DURATION'|null $SegmentTemplateFormat
 * @property StreamSelection|null $StreamSelection
 * @property int|null $SuggestedPresentationDelaySeconds
 * @property 'NONE'|'HTTP-HEAD'|'HTTP-ISO'|'HTTP-XSDATE'|null $UtcTiming
 * @property string|null $UtcTimingUri
 */
class DashPackage extends Shape
{
    /**
     * @param array{
     *     AdTriggers?: list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'>|null,
     *     AdsOnDeliveryRestrictions?: 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH'|null,
     *     Encryption?: DashEncryption|null,
     *     IncludeIframeOnlyStream?: bool|null,
     *     ManifestLayout?: 'FULL'|'COMPACT'|'DRM_TOP_LEVEL_COMPACT'|null,
     *     ManifestWindowSeconds?: int|null,
     *     MinBufferTimeSeconds?: int|null,
     *     MinUpdatePeriodSeconds?: int|null,
     *     PeriodTriggers?: list<'ADS'>|null,
     *     Profile?: 'NONE'|'HBBTV_1_5'|'HYBRIDCAST'|'DVB_DASH_2014'|null,
     *     SegmentDurationSeconds?: int|null,
     *     SegmentTemplateFormat?: 'NUMBER_WITH_TIMELINE'|'TIME_WITH_TIMELINE'|'NUMBER_WITH_DURATION'|null,
     *     StreamSelection?: StreamSelection|null,
     *     SuggestedPresentationDelaySeconds?: int|null,
     *     UtcTiming?: 'NONE'|'HTTP-HEAD'|'HTTP-ISO'|'HTTP-XSDATE'|null,
     *     UtcTimingUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
