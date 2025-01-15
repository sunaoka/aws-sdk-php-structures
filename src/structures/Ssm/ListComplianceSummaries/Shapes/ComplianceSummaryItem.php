<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComplianceType
 * @property CompliantSummary|null $CompliantSummary
 * @property NonCompliantSummary|null $NonCompliantSummary
 */
class ComplianceSummaryItem extends Shape
{
    /**
     * @param array{
     *     ComplianceType?: string|null,
     *     CompliantSummary?: CompliantSummary|null,
     *     NonCompliantSummary?: NonCompliantSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
