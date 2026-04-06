<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PropertyDefinitionResponse|null $definition
 * @property DataValue|null $value
 */
class PropertyResponse extends Shape
{
    /**
     * @param array{
     *     definition?: PropertyDefinitionResponse|null,
     *     value?: DataValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
