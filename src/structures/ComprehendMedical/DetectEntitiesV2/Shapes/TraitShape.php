<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectEntitiesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SIGN'|'SYMPTOM'|'DIAGNOSIS'|'NEGATION'|'PERTAINS_TO_FAMILY'|'HYPOTHETICAL'|'LOW_CONFIDENCE'|'PAST_HISTORY'|'FUTURE'|null $Name
 * @property float|null $Score
 */
class TraitShape extends Shape
{
    /**
     * @param array{
     *     Name?: 'SIGN'|'SYMPTOM'|'DIAGNOSIS'|'NEGATION'|'PERTAINS_TO_FAMILY'|'HYPOTHETICAL'|'LOW_CONFIDENCE'|'PAST_HISTORY'|'FUTURE'|null,
     *     Score?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
