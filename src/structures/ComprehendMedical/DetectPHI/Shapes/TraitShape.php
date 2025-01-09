<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectPHI\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SIGN'|'SYMPTOM'|'DIAGNOSIS'|'NEGATION'|'PERTAINS_TO_FAMILY'|'HYPOTHETICAL'|'LOW_CONFIDENCE'|'PAST_HISTORY'|'FUTURE' $Name
 * @property float $Score
 */
class TraitShape extends Shape
{
    /**
     * @param array{
     *     Name?: 'SIGN'|'SYMPTOM'|'DIAGNOSIS'|'NEGATION'|'PERTAINS_TO_FAMILY'|'HYPOTHETICAL'|'LOW_CONFIDENCE'|'PAST_HISTORY'|'FUTURE',
     *     Score?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
