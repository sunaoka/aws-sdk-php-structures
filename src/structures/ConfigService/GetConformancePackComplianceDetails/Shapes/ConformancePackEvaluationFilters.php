<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ConfigRuleNames
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'|null $ComplianceType
 * @property string|null $ResourceType
 * @property list<string>|null $ResourceIds
 */
class ConformancePackEvaluationFilters extends Shape
{
    /**
     * @param array{
     *     ConfigRuleNames?: list<string>|null,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'|null,
     *     ResourceType?: string|null,
     *     ResourceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
