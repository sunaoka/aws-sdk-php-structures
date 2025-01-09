<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConfigRuleComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property ComplianceSummary $ComplianceSummary
 */
class AggregateComplianceCount extends Shape
{
    /**
     * @param array{
     *     GroupName?: string,
     *     ComplianceSummary?: ComplianceSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
