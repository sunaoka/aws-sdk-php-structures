<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringParameterDeclaration|null $StringParameterDeclaration
 * @property DecimalParameterDeclaration|null $DecimalParameterDeclaration
 * @property IntegerParameterDeclaration|null $IntegerParameterDeclaration
 * @property DateTimeParameterDeclaration|null $DateTimeParameterDeclaration
 */
class ParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     StringParameterDeclaration?: StringParameterDeclaration|null,
     *     DecimalParameterDeclaration?: DecimalParameterDeclaration|null,
     *     IntegerParameterDeclaration?: IntegerParameterDeclaration|null,
     *     DateTimeParameterDeclaration?: DateTimeParameterDeclaration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
