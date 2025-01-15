<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ValueMapping> $values
 * @property array<string, FormInputBindingPropertiesValue>|null $bindingProperties
 */
class ValueMappings extends Shape
{
    /**
     * @param array{
     *     values: list<ValueMapping>,
     *     bindingProperties?: array<string, FormInputBindingPropertiesValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
