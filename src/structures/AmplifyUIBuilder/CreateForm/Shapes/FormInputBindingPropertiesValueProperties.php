<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $model
 */
class FormInputBindingPropertiesValueProperties extends Shape
{
    /**
     * @param array{model?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
