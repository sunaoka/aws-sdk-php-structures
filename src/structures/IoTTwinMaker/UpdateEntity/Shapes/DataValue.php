<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $booleanValue
 * @property double|null $doubleValue
 * @property int|null $integerValue
 * @property int|null $longValue
 * @property string|null $stringValue
 * @property list<DataValue>|null $listValue
 * @property array<string, DataValue>|null $mapValue
 * @property RelationshipValue|null $relationshipValue
 * @property string|null $expression
 */
class DataValue extends Shape
{
    /**
     * @param array{
     *     booleanValue?: bool|null,
     *     doubleValue?: double|null,
     *     integerValue?: int|null,
     *     longValue?: int|null,
     *     stringValue?: string|null,
     *     listValue?: list<DataValue>|null,
     *     mapValue?: array<string, DataValue>|null,
     *     relationshipValue?: RelationshipValue|null,
     *     expression?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
