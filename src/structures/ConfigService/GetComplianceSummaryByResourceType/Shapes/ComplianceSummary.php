<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceSummaryByResourceType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComplianceContributorCount|null $CompliantResourceCount
 * @property ComplianceContributorCount|null $NonCompliantResourceCount
 * @property \Aws\Api\DateTimeResult|null $ComplianceSummaryTimestamp
 */
class ComplianceSummary extends Shape
{
    /**
     * @param array{
     *     CompliantResourceCount?: ComplianceContributorCount|null,
     *     NonCompliantResourceCount?: ComplianceContributorCount|null,
     *     ComplianceSummaryTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
