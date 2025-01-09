<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackCompliance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ConfigRuleNames
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA' $ComplianceType
 */
class ConformancePackComplianceFilters extends Shape
{
    /**
     * @param array{
     *     ConfigRuleNames?: list<string>,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
