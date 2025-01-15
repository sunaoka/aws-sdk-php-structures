<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferICD10CM\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEGATION'|'DIAGNOSIS'|'SIGN'|'SYMPTOM'|'PERTAINS_TO_FAMILY'|'HYPOTHETICAL'|'LOW_CONFIDENCE'|null $Name
 * @property float|null $Score
 */
class ICD10CMTrait extends Shape
{
    /**
     * @param array{
     *     Name?: 'NEGATION'|'DIAGNOSIS'|'SIGN'|'SYMPTOM'|'PERTAINS_TO_FAMILY'|'HYPOTHETICAL'|'LOW_CONFIDENCE'|null,
     *     Score?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
