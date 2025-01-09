<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $booleanValue
 * @property double $doubleValue
 * @property int $integerValue
 * @property int $longValue
 * @property string $stringValue
 * @property list<DataValue> $listValue
 * @property array<string, DataValue> $mapValue
 * @property RelationshipValue $relationshipValue
 * @property string $expression
 */
class DataValue extends Shape
{
    /**
     * @param array{
     *     booleanValue?: bool,
     *     doubleValue?: double,
     *     integerValue?: int,
     *     longValue?: int,
     *     stringValue?: string,
     *     listValue?: list<DataValue>,
     *     mapValue?: array<string, DataValue>,
     *     relationshipValue?: RelationshipValue,
     *     expression?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
