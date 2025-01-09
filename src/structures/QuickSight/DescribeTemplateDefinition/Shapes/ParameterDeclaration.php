<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringParameterDeclaration $StringParameterDeclaration
 * @property DecimalParameterDeclaration $DecimalParameterDeclaration
 * @property IntegerParameterDeclaration $IntegerParameterDeclaration
 * @property DateTimeParameterDeclaration $DateTimeParameterDeclaration
 */
class ParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     StringParameterDeclaration?: StringParameterDeclaration,
     *     DecimalParameterDeclaration?: DecimalParameterDeclaration,
     *     IntegerParameterDeclaration?: IntegerParameterDeclaration,
     *     DateTimeParameterDeclaration?: DateTimeParameterDeclaration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
