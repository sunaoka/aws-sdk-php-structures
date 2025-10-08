<?php

namespace Sunaoka\Aws\Structures\B2bi\TestParsing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $elementPosition
 * @property 'OPTIONAL'|'MANDATORY' $requirement
 */
class X12ElementRequirementValidationRule extends Shape
{
    /**
     * @param array{
     *     elementPosition: string,
     *     requirement: 'OPTIONAL'|'MANDATORY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
