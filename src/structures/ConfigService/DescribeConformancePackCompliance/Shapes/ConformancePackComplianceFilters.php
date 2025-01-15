<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackCompliance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ConfigRuleNames
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'|null $ComplianceType
 */
class ConformancePackComplianceFilters extends Shape
{
    /**
     * @param array{
     *     ConfigRuleNames?: list<string>|null,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
