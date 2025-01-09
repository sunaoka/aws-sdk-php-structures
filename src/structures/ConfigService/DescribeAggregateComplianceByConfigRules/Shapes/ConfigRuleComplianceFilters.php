<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigRuleName
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA' $ComplianceType
 * @property string $AccountId
 * @property string $AwsRegion
 */
class ConfigRuleComplianceFilters extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA',
     *     AccountId?: string,
     *     AwsRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
