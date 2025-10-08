<?php

namespace Sunaoka\Aws\Structures\B2bi\ListTransformers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12CodeListValidationRule|null $codeListValidationRule
 * @property X12ElementLengthValidationRule|null $elementLengthValidationRule
 * @property X12ElementRequirementValidationRule|null $elementRequirementValidationRule
 */
class X12ValidationRule extends Shape
{
    /**
     * @param array{
     *     codeListValidationRule?: X12CodeListValidationRule|null,
     *     elementLengthValidationRule?: X12ElementLengthValidationRule|null,
     *     elementRequirementValidationRule?: X12ElementRequirementValidationRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
