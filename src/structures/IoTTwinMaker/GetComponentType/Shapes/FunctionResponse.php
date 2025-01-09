<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $requiredProperties
 * @property 'ENTITY'|'WORKSPACE' $scope
 * @property DataConnector $implementedBy
 * @property bool $isInherited
 */
class FunctionResponse extends Shape
{
    /**
     * @param array{
     *     requiredProperties?: list<string>,
     *     scope?: 'ENTITY'|'WORKSPACE',
     *     implementedBy?: DataConnector,
     *     isInherited?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
