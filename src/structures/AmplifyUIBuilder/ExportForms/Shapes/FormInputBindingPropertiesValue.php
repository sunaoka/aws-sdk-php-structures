<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property FormInputBindingPropertiesValueProperties $bindingProperties
 */
class FormInputBindingPropertiesValue extends Shape
{
    /**
     * @param array{
     *     type?: string,
     *     bindingProperties?: FormInputBindingPropertiesValueProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
