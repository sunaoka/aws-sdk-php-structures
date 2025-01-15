<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $model
 */
class FormInputBindingPropertiesValueProperties extends Shape
{
    /**
     * @param array{model?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
