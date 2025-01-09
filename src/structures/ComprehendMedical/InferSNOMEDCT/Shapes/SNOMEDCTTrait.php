<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEGATION'|'DIAGNOSIS'|'SIGN'|'SYMPTOM'|'PERTAINS_TO_FAMILY'|'HYPOTHETICAL'|'LOW_CONFIDENCE'|'PAST_HISTORY'|'FUTURE' $Name
 * @property float $Score
 */
class SNOMEDCTTrait extends Shape
{
    /**
     * @param array{
     *     Name?: 'NEGATION'|'DIAGNOSIS'|'SIGN'|'SYMPTOM'|'PERTAINS_TO_FAMILY'|'HYPOTHETICAL'|'LOW_CONFIDENCE'|'PAST_HISTORY'|'FUTURE',
     *     Score?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
