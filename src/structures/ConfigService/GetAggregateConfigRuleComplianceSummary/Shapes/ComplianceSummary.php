<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConfigRuleComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComplianceContributorCount $CompliantResourceCount
 * @property ComplianceContributorCount $NonCompliantResourceCount
 * @property \Aws\Api\DateTimeResult $ComplianceSummaryTimestamp
 */
class ComplianceSummary extends Shape
{
    /**
     * @param array{
     *     CompliantResourceCount?: ComplianceContributorCount,
     *     NonCompliantResourceCount?: ComplianceContributorCount,
     *     ComplianceSummaryTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
