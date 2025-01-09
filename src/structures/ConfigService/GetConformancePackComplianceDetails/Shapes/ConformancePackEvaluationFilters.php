<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ConfigRuleNames
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA' $ComplianceType
 * @property string $ResourceType
 * @property list<string> $ResourceIds
 */
class ConformancePackEvaluationFilters extends Shape
{
    /**
     * @param array{
     *     ConfigRuleNames?: list<string>,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA',
     *     ResourceType?: string,
     *     ResourceIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
