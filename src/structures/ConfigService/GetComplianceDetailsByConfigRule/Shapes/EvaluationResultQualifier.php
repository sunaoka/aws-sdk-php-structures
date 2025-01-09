<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceDetailsByConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigRuleName
 * @property string $ResourceType
 * @property string $ResourceId
 * @property 'DETECTIVE'|'PROACTIVE' $EvaluationMode
 */
class EvaluationResultQualifier extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string,
     *     ResourceType?: string,
     *     ResourceId?: string,
     *     EvaluationMode?: 'DETECTIVE'|'PROACTIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
