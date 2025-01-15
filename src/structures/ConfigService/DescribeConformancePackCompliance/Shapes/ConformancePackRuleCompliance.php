<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackCompliance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConfigRuleName
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'|null $ComplianceType
 * @property list<string>|null $Controls
 */
class ConformancePackRuleCompliance extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string|null,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'|null,
     *     Controls?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
