<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEGATION'|'DIAGNOSIS'|'SIGN'|'SYMPTOM'|'PERTAINS_TO_FAMILY'|'HYPOTHETICAL'|'LOW_CONFIDENCE'|'PAST_HISTORY'|'FUTURE'|null $Name
 * @property float|null $Score
 */
class SNOMEDCTTrait extends Shape
{
    /**
     * @param array{
     *     Name?: 'NEGATION'|'DIAGNOSIS'|'SIGN'|'SYMPTOM'|'PERTAINS_TO_FAMILY'|'HYPOTHETICAL'|'LOW_CONFIDENCE'|'PAST_HISTORY'|'FUTURE'|null,
     *     Score?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
