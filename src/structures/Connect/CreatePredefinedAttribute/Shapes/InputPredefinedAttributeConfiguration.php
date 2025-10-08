<?php

namespace Sunaoka\Aws\Structures\Connect\CreatePredefinedAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableValueValidationOnAssociation
 */
class InputPredefinedAttributeConfiguration extends Shape
{
    /**
     * @param array{EnableValueValidationOnAssociation?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
