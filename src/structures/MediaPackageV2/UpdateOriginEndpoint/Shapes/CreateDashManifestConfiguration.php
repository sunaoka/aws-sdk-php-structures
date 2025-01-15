<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property int<30, max>|null $ManifestWindowSeconds
 * @property FilterConfiguration|null $FilterConfiguration
 * @property int<1, 3600>|null $MinUpdatePeriodSeconds
 * @property int<0, 3600>|null $MinBufferTimeSeconds
 * @property int<0, 3600>|null $SuggestedPresentationDelaySeconds
 * @property 'NUMBER_WITH_TIMELINE'|null $SegmentTemplateFormat
 * @property list<'AVAILS'|'DRM_KEY_ROTATION'|'SOURCE_CHANGES'|'SOURCE_DISRUPTIONS'|'NONE'>|null $PeriodTriggers
 * @property ScteDash|null $ScteDash
 * @property 'INDIVIDUAL'|'REFERENCED'|null $DrmSignaling
 * @property DashUtcTiming|null $UtcTiming
 */
class CreateDashManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     ManifestWindowSeconds?: int<30, max>|null,
     *     FilterConfiguration?: FilterConfiguration|null,
     *     MinUpdatePeriodSeconds?: int<1, 3600>|null,
     *     MinBufferTimeSeconds?: int<0, 3600>|null,
     *     SuggestedPresentationDelaySeconds?: int<0, 3600>|null,
     *     SegmentTemplateFormat?: 'NUMBER_WITH_TIMELINE'|null,
     *     PeriodTriggers?: list<'AVAILS'|'DRM_KEY_ROTATION'|'SOURCE_CHANGES'|'SOURCE_DISRUPTIONS'|'NONE'>|null,
     *     ScteDash?: ScteDash|null,
     *     DrmSignaling?: 'INDIVIDUAL'|'REFERENCED'|null,
     *     UtcTiming?: DashUtcTiming|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
