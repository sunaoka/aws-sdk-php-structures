<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComplianceType
 * @property CompliantSummary $CompliantSummary
 * @property NonCompliantSummary $NonCompliantSummary
 */
class ComplianceSummaryItem extends Shape
{
    /**
     * @param array{
     *     ComplianceType?: string,
     *     CompliantSummary?: CompliantSummary,
     *     NonCompliantSummary?: NonCompliantSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
