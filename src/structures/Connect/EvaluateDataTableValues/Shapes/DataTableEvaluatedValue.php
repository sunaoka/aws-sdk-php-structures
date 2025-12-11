<?php

namespace Sunaoka\Aws\Structures\Connect\EvaluateDataTableValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecordId
 * @property list<PrimaryValue> $PrimaryValues
 * @property string $AttributeName
 * @property 'TEXT'|'NUMBER'|'BOOLEAN'|'TEXT_LIST'|'NUMBER_LIST' $ValueType
 * @property bool $Found
 * @property bool $Error
 * @property string $EvaluatedValue
 */
class DataTableEvaluatedValue extends Shape
{
    /**
     * @param array{
     *     RecordId: string,
     *     PrimaryValues: list<PrimaryValue>,
     *     AttributeName: string,
     *     ValueType: 'TEXT'|'NUMBER'|'BOOLEAN'|'TEXT_LIST'|'NUMBER_LIST',
     *     Found: bool,
     *     Error: bool,
     *     EvaluatedValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
