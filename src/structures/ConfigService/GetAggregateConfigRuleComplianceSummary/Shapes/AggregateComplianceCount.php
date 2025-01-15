<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConfigRuleComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupName
 * @property ComplianceSummary|null $ComplianceSummary
 */
class AggregateComplianceCount extends Shape
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     ComplianceSummary?: ComplianceSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
