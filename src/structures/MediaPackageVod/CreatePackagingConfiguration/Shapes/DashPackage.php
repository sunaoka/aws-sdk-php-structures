<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DashManifest> $DashManifests
 * @property DashEncryption|null $Encryption
 * @property bool|null $IncludeEncoderConfigurationInSegments
 * @property bool|null $IncludeIframeOnlyStream
 * @property list<'ADS'>|null $PeriodTriggers
 * @property int|null $SegmentDurationSeconds
 * @property 'NUMBER_WITH_TIMELINE'|'TIME_WITH_TIMELINE'|'NUMBER_WITH_DURATION'|null $SegmentTemplateFormat
 */
class DashPackage extends Shape
{
    /**
     * @param array{
     *     DashManifests: list<DashManifest>,
     *     Encryption?: DashEncryption|null,
     *     IncludeEncoderConfigurationInSegments?: bool|null,
     *     IncludeIframeOnlyStream?: bool|null,
     *     PeriodTriggers?: list<'ADS'>|null,
     *     SegmentDurationSeconds?: int|null,
     *     SegmentTemplateFormat?: 'NUMBER_WITH_TIMELINE'|'TIME_WITH_TIMELINE'|'NUMBER_WITH_DURATION'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
