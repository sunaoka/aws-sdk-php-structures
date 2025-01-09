<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $requiredProperties
 * @property 'ENTITY'|'WORKSPACE' $scope
 * @property DataConnector $implementedBy
 */
class FunctionRequest extends Shape
{
    /**
     * @param array{
     *     requiredProperties?: list<string>,
     *     scope?: 'ENTITY'|'WORKSPACE',
     *     implementedBy?: DataConnector
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
