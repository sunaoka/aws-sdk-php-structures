<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property string $Url
 * @property int $ManifestWindowSeconds
 * @property FilterConfiguration $FilterConfiguration
 * @property int $MinUpdatePeriodSeconds
 * @property int $MinBufferTimeSeconds
 * @property int $SuggestedPresentationDelaySeconds
 * @property 'NUMBER_WITH_TIMELINE' $SegmentTemplateFormat
 * @property list<'AVAILS'|'DRM_KEY_ROTATION'|'SOURCE_CHANGES'|'SOURCE_DISRUPTIONS'|'NONE'> $PeriodTriggers
 * @property ScteDash $ScteDash
 * @property 'INDIVIDUAL'|'REFERENCED' $DrmSignaling
 * @property DashUtcTiming $UtcTiming
 */
class GetDashManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     Url: string,
     *     ManifestWindowSeconds?: int,
     *     FilterConfiguration?: FilterConfiguration,
     *     MinUpdatePeriodSeconds?: int,
     *     MinBufferTimeSeconds?: int,
     *     SuggestedPresentationDelaySeconds?: int,
     *     SegmentTemplateFormat?: 'NUMBER_WITH_TIMELINE',
     *     PeriodTriggers?: list<'AVAILS'|'DRM_KEY_ROTATION'|'SOURCE_CHANGES'|'SOURCE_DISRUPTIONS'|'NONE'>,
     *     ScteDash?: ScteDash,
     *     DrmSignaling?: 'INDIVIDUAL'|'REFERENCED',
     *     UtcTiming?: DashUtcTiming
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
