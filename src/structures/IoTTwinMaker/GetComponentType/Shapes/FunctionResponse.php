<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $requiredProperties
 * @property 'ENTITY'|'WORKSPACE'|null $scope
 * @property DataConnector|null $implementedBy
 * @property bool|null $isInherited
 */
class FunctionResponse extends Shape
{
    /**
     * @param array{
     *     requiredProperties?: list<string>|null,
     *     scope?: 'ENTITY'|'WORKSPACE'|null,
     *     implementedBy?: DataConnector|null,
     *     isInherited?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
