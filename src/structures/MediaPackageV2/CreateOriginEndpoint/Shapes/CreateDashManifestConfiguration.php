<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property int<30, max> $ManifestWindowSeconds
 * @property FilterConfiguration $FilterConfiguration
 * @property int<1, 3600> $MinUpdatePeriodSeconds
 * @property int<0, 3600> $MinBufferTimeSeconds
 * @property int<0, 3600> $SuggestedPresentationDelaySeconds
 * @property 'NUMBER_WITH_TIMELINE' $SegmentTemplateFormat
 * @property list<'AVAILS'|'DRM_KEY_ROTATION'|'SOURCE_CHANGES'|'SOURCE_DISRUPTIONS'|'NONE'> $PeriodTriggers
 * @property ScteDash $ScteDash
 * @property 'INDIVIDUAL'|'REFERENCED' $DrmSignaling
 * @property DashUtcTiming $UtcTiming
 */
class CreateDashManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     ManifestWindowSeconds?: int<30, max>,
     *     FilterConfiguration?: FilterConfiguration,
     *     MinUpdatePeriodSeconds?: int<1, 3600>,
     *     MinBufferTimeSeconds?: int<0, 3600>,
     *     SuggestedPresentationDelaySeconds?: int<0, 3600>,
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
