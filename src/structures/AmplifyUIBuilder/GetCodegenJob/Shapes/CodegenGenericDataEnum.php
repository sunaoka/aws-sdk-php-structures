<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $values
 */
class CodegenGenericDataEnum extends Shape
{
    /**
     * @param array{values: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
