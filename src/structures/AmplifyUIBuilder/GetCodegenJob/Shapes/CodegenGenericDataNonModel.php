<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, CodegenGenericDataField> $fields
 */
class CodegenGenericDataNonModel extends Shape
{
    /**
     * @param array{fields: array<string, CodegenGenericDataField>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
