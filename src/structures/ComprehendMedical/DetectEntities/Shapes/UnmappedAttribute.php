<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MEDICATION'|'MEDICAL_CONDITION'|'PROTECTED_HEALTH_INFORMATION'|'TEST_TREATMENT_PROCEDURE'|'ANATOMY'|'TIME_EXPRESSION'|'BEHAVIORAL_ENVIRONMENTAL_SOCIAL' $Type
 * @property Attribute $Attribute
 */
class UnmappedAttribute extends Shape
{
    /**
     * @param array{
     *     Type?: 'MEDICATION'|'MEDICAL_CONDITION'|'PROTECTED_HEALTH_INFORMATION'|'TEST_TREATMENT_PROCEDURE'|'ANATOMY'|'TIME_EXPRESSION'|'BEHAVIORAL_ENVIRONMENTAL_SOCIAL',
     *     Attribute?: Attribute
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
