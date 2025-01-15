<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 * @property int|null $CompliantCriticalCount
 * @property int|null $CompliantHighCount
 * @property int|null $CompliantMediumCount
 * @property string|null $ExecutionType
 * @property int|null $NonCompliantCriticalCount
 * @property int|null $CompliantInformationalCount
 * @property int|null $NonCompliantInformationalCount
 * @property int|null $CompliantUnspecifiedCount
 * @property int|null $NonCompliantLowCount
 * @property int|null $NonCompliantHighCount
 * @property int|null $CompliantLowCount
 * @property string|null $ComplianceType
 * @property string|null $PatchBaselineId
 * @property string|null $OverallSeverity
 * @property int|null $NonCompliantMediumCount
 * @property int|null $NonCompliantUnspecifiedCount
 * @property string|null $PatchGroup
 */
class AwsSsmComplianceSummary extends Shape
{
    /**
     * @param array{
     *     Status?: string|null,
     *     CompliantCriticalCount?: int|null,
     *     CompliantHighCount?: int|null,
     *     CompliantMediumCount?: int|null,
     *     ExecutionType?: string|null,
     *     NonCompliantCriticalCount?: int|null,
     *     CompliantInformationalCount?: int|null,
     *     NonCompliantInformationalCount?: int|null,
     *     CompliantUnspecifiedCount?: int|null,
     *     NonCompliantLowCount?: int|null,
     *     NonCompliantHighCount?: int|null,
     *     CompliantLowCount?: int|null,
     *     ComplianceType?: string|null,
     *     PatchBaselineId?: string|null,
     *     OverallSeverity?: string|null,
     *     NonCompliantMediumCount?: int|null,
     *     NonCompliantUnspecifiedCount?: int|null,
     *     PatchGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
