<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property int $CompliantCriticalCount
 * @property int $CompliantHighCount
 * @property int $CompliantMediumCount
 * @property string $ExecutionType
 * @property int $NonCompliantCriticalCount
 * @property int $CompliantInformationalCount
 * @property int $NonCompliantInformationalCount
 * @property int $CompliantUnspecifiedCount
 * @property int $NonCompliantLowCount
 * @property int $NonCompliantHighCount
 * @property int $CompliantLowCount
 * @property string $ComplianceType
 * @property string $PatchBaselineId
 * @property string $OverallSeverity
 * @property int $NonCompliantMediumCount
 * @property int $NonCompliantUnspecifiedCount
 * @property string $PatchGroup
 */
class AwsSsmComplianceSummary extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     CompliantCriticalCount?: int,
     *     CompliantHighCount?: int,
     *     CompliantMediumCount?: int,
     *     ExecutionType?: string,
     *     NonCompliantCriticalCount?: int,
     *     CompliantInformationalCount?: int,
     *     NonCompliantInformationalCount?: int,
     *     CompliantUnspecifiedCount?: int,
     *     NonCompliantLowCount?: int,
     *     NonCompliantHighCount?: int,
     *     CompliantLowCount?: int,
     *     ComplianceType?: string,
     *     PatchBaselineId?: string,
     *     OverallSeverity?: string,
     *     NonCompliantMediumCount?: int,
     *     NonCompliantUnspecifiedCount?: int,
     *     PatchGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
