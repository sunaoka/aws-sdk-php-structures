<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ValueMapping> $values
 * @property array<string, FormInputBindingPropertiesValue> $bindingProperties
 */
class ValueMappings extends Shape
{
    /**
     * @param array{
     *     values: list<ValueMapping>,
     *     bindingProperties?: array<string, FormInputBindingPropertiesValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
