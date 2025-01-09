<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackCompliance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigRuleName
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA' $ComplianceType
 * @property list<string> $Controls
 */
class ConformancePackRuleCompliance extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA',
     *     Controls?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
