<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConfigRuleName
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 * @property 'DETECTIVE'|'PROACTIVE'|null $EvaluationMode
 */
class EvaluationResultQualifier extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string|null,
     *     ResourceType?: string|null,
     *     ResourceId?: string|null,
     *     EvaluationMode?: 'DETECTIVE'|'PROACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
