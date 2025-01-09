<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'> $AdTriggers
 * @property 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH' $AdsOnDeliveryRestrictions
 * @property DashEncryption $Encryption
 * @property bool $IncludeIframeOnlyStream
 * @property 'FULL'|'COMPACT'|'DRM_TOP_LEVEL_COMPACT' $ManifestLayout
 * @property int $ManifestWindowSeconds
 * @property int $MinBufferTimeSeconds
 * @property int $MinUpdatePeriodSeconds
 * @property list<'ADS'> $PeriodTriggers
 * @property 'NONE'|'HBBTV_1_5'|'HYBRIDCAST'|'DVB_DASH_2014' $Profile
 * @property int $SegmentDurationSeconds
 * @property 'NUMBER_WITH_TIMELINE'|'TIME_WITH_TIMELINE'|'NUMBER_WITH_DURATION' $SegmentTemplateFormat
 * @property StreamSelection $StreamSelection
 * @property int $SuggestedPresentationDelaySeconds
 * @property 'NONE'|'HTTP-HEAD'|'HTTP-ISO'|'HTTP-XSDATE' $UtcTiming
 * @property string $UtcTimingUri
 */
class DashPackage extends Shape
{
    /**
     * @param array{
     *     AdTriggers?: list<'SPLICE_INSERT'|'BREAK'|'PROVIDER_ADVERTISEMENT'|'DISTRIBUTOR_ADVERTISEMENT'|'PROVIDER_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_PLACEMENT_OPPORTUNITY'|'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'|'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'>,
     *     AdsOnDeliveryRestrictions?: 'NONE'|'RESTRICTED'|'UNRESTRICTED'|'BOTH',
     *     Encryption?: DashEncryption,
     *     IncludeIframeOnlyStream?: bool,
     *     ManifestLayout?: 'FULL'|'COMPACT'|'DRM_TOP_LEVEL_COMPACT',
     *     ManifestWindowSeconds?: int,
     *     MinBufferTimeSeconds?: int,
     *     MinUpdatePeriodSeconds?: int,
     *     PeriodTriggers?: list<'ADS'>,
     *     Profile?: 'NONE'|'HBBTV_1_5'|'HYBRIDCAST'|'DVB_DASH_2014',
     *     SegmentDurationSeconds?: int,
     *     SegmentTemplateFormat?: 'NUMBER_WITH_TIMELINE'|'TIME_WITH_TIMELINE'|'NUMBER_WITH_DURATION',
     *     StreamSelection?: StreamSelection,
     *     SuggestedPresentationDelaySeconds?: int,
     *     UtcTiming?: 'NONE'|'HTTP-HEAD'|'HTTP-ISO'|'HTTP-XSDATE',
     *     UtcTimingUri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
