<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $requiredProperties
 * @property 'ENTITY'|'WORKSPACE'|null $scope
 * @property DataConnector|null $implementedBy
 */
class FunctionRequest extends Shape
{
    /**
     * @param array{
     *     requiredProperties?: list<string>|null,
     *     scope?: 'ENTITY'|'WORKSPACE'|null,
     *     implementedBy?: DataConnector|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
