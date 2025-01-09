<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsGuardDutyDetectorDataSourcesDetails $DataSources
 * @property list<AwsGuardDutyDetectorFeaturesDetails> $Features
 * @property string $FindingPublishingFrequency
 * @property string $ServiceRole
 * @property string $Status
 */
class AwsGuardDutyDetectorDetails extends Shape
{
    /**
     * @param array{
     *     DataSources?: AwsGuardDutyDetectorDataSourcesDetails,
     *     Features?: list<AwsGuardDutyDetectorFeaturesDetails>,
     *     FindingPublishingFrequency?: string,
     *     ServiceRole?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
