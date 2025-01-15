<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsGuardDutyDetectorDataSourcesDetails|null $DataSources
 * @property list<AwsGuardDutyDetectorFeaturesDetails>|null $Features
 * @property string|null $FindingPublishingFrequency
 * @property string|null $ServiceRole
 * @property string|null $Status
 */
class AwsGuardDutyDetectorDetails extends Shape
{
    /**
     * @param array{
     *     DataSources?: AwsGuardDutyDetectorDataSourcesDetails|null,
     *     Features?: list<AwsGuardDutyDetectorFeaturesDetails>|null,
     *     FindingPublishingFrequency?: string|null,
     *     ServiceRole?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
