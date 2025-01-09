<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DashManifest> $DashManifests
 * @property DashEncryption $Encryption
 * @property bool $IncludeEncoderConfigurationInSegments
 * @property bool $IncludeIframeOnlyStream
 * @property list<'ADS'> $PeriodTriggers
 * @property int $SegmentDurationSeconds
 * @property 'NUMBER_WITH_TIMELINE'|'TIME_WITH_TIMELINE'|'NUMBER_WITH_DURATION' $SegmentTemplateFormat
 */
class DashPackage extends Shape
{
    /**
     * @param array{
     *     DashManifests: list<DashManifest>,
     *     Encryption?: DashEncryption,
     *     IncludeEncoderConfigurationInSegments?: bool,
     *     IncludeIframeOnlyStream?: bool,
     *     PeriodTriggers?: list<'ADS'>,
     *     SegmentDurationSeconds?: int,
     *     SegmentTemplateFormat?: 'NUMBER_WITH_TIMELINE'|'TIME_WITH_TIMELINE'|'NUMBER_WITH_DURATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
